<?php

namespace App\Controller;

use App\Entity\VictoriusKangaroo;
use App\Form\VictoriusKangarooType;
use App\Repository\VictoriusKangarooRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/victorius/kangaroo")
 */
class VictoriusKangarooController extends AbstractController
{
    /**
     * @Route("/", name="victorius_kangaroo_index", methods={"GET"})
     */
    public function index(VictoriusKangarooRepository $victoriusKangarooRepository): Response
    {
        return $this->render('victorius_kangaroo/index.html.twig', [
            'victorius_kangaroos' => $victoriusKangarooRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="victorius_kangaroo_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $victoriusKangaroo = new VictoriusKangaroo();
        $form = $this->createForm(VictoriusKangarooType::class, $victoriusKangaroo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($victoriusKangaroo);
            $entityManager->flush();

            return $this->redirectToRoute('victorius_kangaroo_index');
        }

        return $this->render('victorius_kangaroo/new.html.twig', [
            'victorius_kangaroo' => $victoriusKangaroo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="victorius_kangaroo_show", methods={"GET"})
     */
    public function show(VictoriusKangaroo $victoriusKangaroo): Response
    {
        return $this->render('victorius_kangaroo/show.html.twig', [
            'victorius_kangaroo' => $victoriusKangaroo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="victorius_kangaroo_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, VictoriusKangaroo $victoriusKangaroo): Response
    {
        $form = $this->createForm(VictoriusKangarooType::class, $victoriusKangaroo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('victorius_kangaroo_index');
        }

        return $this->render('victorius_kangaroo/edit.html.twig', [
            'victorius_kangaroo' => $victoriusKangaroo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="victorius_kangaroo_delete", methods={"DELETE"})
     */
    public function delete(Request $request, VictoriusKangaroo $victoriusKangaroo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$victoriusKangaroo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($victoriusKangaroo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('victorius_kangaroo_index');
    }
}
