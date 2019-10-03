<?php

namespace App\Controller;

use App\Repository\MaterialRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;

class MaterialController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(MaterialRepository $repo, Request $data, ObjectManager $manager)
    {
        if ($data->request->get('id')) {
            $material = $repo->find($data->request->get('id'));
            $material->setQuantity($material->getQuantity() - 1);
            $manager->persist($material);
            $manager->flush();
        }




        $materials = $repo->findAll();
        return $this->render('material/index.html.twig', [
            'materials' => $materials
        ]);
    }

    /**
     * @Route("/editer/{id}", name="update")
     */
    public function update($id, Request $data, ObjectManager $manager, MaterialRepository $repo)
    {
        $material = $repo->find($id);
        $form = $this->createFormBuilder($material)
            ->add('name')
            ->add('content')
            ->add('price')
            ->add('quantity')
            ->add('Enregistrer les modifications', SubmitType::class)
            ->getForm();
        $form->handleRequest($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $material->setCreatedAt(new \DateTime());
            $manager->persist($material);
            $manager->flush();

            return $this->redirectToRoute('home');
        }
        return $this->render('material/update.html.twig', [
            'form_material' => $form->createView()
        ]);
    }

    /**
     * @Route("/information-complémentaire/{id}", name="pdf")
     */
    public function additional_information(MaterialRepository $repo, $id)
    {
        $material = $repo->find($id);
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('pdf/material_information.html.twig', [
            'title' => "Information complémentaire du produit",
            'material' => $material
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("additional_information.pdf", [
            "Attachment" => false,
            "inline" => true
        ]);
    }
}
