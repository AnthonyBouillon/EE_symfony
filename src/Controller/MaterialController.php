<?php

namespace App\Controller;

use App\Repository\MaterialRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
}
