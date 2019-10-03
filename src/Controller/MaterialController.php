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
    public function index(MaterialRepository $repo, Request $data, ObjectManager $manager,  \Swift_Mailer $mailer)
    {
        // Si l'identifiant du produit existe
        if ($data->request->get('id')) {
            // On récupère les informations du produit
            $material = $repo->find($data->request->get('id'));
            // Si la quantité est égale à 1 (juste avant d'être décrémenter -1)
            if ($material->getQuantity() == 1) {
                // On envoi un email à l'admin disant qu'un produit n'est plus en stock
                $message = (new \Swift_Message('Hello Email'))
                    ->setFrom('test.exercice.symfony@gmail.com')
                    ->setTo('test.exercice.symfony@gmail.com')
                    ->setBody(
                        $this->renderView(
                            'emails/mail.html.twig',
                            [
                                'name' => 'Mr Dupont',
                                'material_empty' => $material->getName()
                            ]
                        ),
                        'text/html'
                    );
                $mailer->send($message);
            }
            // On décrémente la quantité du produit
            $material->setQuantity($material->getQuantity() - 1);
            $manager->persist($material);
            $manager->flush();
        }

        // Récupère les informations des produits
        $materials = $repo->findAll();
        // Le transmet à la vue
        return $this->render('material/index.html.twig', [
            'materials' => $materials
        ]);
    }

    /**
     * @Route("/editer/{id}", name="update")
     */
    public function update($id, Request $data, ObjectManager $manager, MaterialRepository $repo)
    {
        // Récupère les informations du produit
        $material = $repo->find($id);
        // Créer le formulaire lié à l'entité
        $form = $this->createFormBuilder($material)
            ->add('name')
            ->add('content')
            ->add('price')
            ->add('quantity')
            ->add('Enregistrer les modifications', SubmitType::class)
            ->getForm();
        // Vérifie les données
        $form->handleRequest($data);
        // Vérifie si le formulaire est soumis et valide (contrainte faite dans l'entité (Assert))
        if ($form->isSubmitted() && $form->isValid()) {
            // Définie la date du jour
            $material->setCreatedAt(new \DateTime());
            $manager->persist($material);
            $manager->flush();
            // Redirige vers la page d'accueil
            return $this->redirectToRoute('home');
        }
        // Transmet le formulaire à la vue
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
        // Configure le PDF
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);
        // Transmet les options
        $dompdf = new Dompdf($pdfOptions);

        // Récupère le template du PDF
        $html = $this->renderView('pdf/material_information.html.twig', [
            'title' => "Information complémentaire du produit",
            'material' => $material
        ]);

        // Charge le HTML
        $dompdf->loadHtml($html);

        // Format du PDF
        $dompdf->setPaper('A4', 'portrait');

        // Transforme le HTML en PDF
        $dompdf->render();

        // Génère le PDF et permet son téléchargement
        $dompdf->stream("additional_information.pdf", [
            "Attachment" => false,
            "inline" => true
        ]);
    }
}
