<?php
/*@author Sandra
* CRUD */
namespace App\Controller;

use App\Entity\Socialnetwork;
use App\Form\SocialnetworkType;
use App\Repository\SocialnetworkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/socialnetwork")
 */
class SocialnetworkController extends AbstractController
{
    /**
     * @Route("/", name="socialnetwork_index", methods={"GET"})
     */
    public function index(SocialnetworkRepository $socialnetworkRepository): Response
    {
        return $this->render('socialnetwork/index.html.twig', [
            'socialnetworks' => $socialnetworkRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="socialnetwork_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $socialnetwork = new Socialnetwork();
        $form = $this->createForm(SocialnetworkType::class, $socialnetwork);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($socialnetwork);
            $entityManager->flush();

            return $this->redirectToRoute('socialnetwork_index');
        }

        return $this->render('socialnetwork/new.html.twig', [
            'socialnetwork' => $socialnetwork,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="socialnetwork_show", methods={"GET"})
     */
    public function show(Socialnetwork $socialnetwork): Response
    {
        return $this->render('socialnetwork/show.html.twig', [
            'socialnetwork' => $socialnetwork,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="socialnetwork_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Socialnetwork $socialnetwork): Response
    {
        $form = $this->createForm(SocialnetworkType::class, $socialnetwork);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('socialnetwork_index');
        }

        return $this->render('socialnetwork/edit.html.twig', [
            'socialnetwork' => $socialnetwork,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="socialnetwork_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Socialnetwork $socialnetwork): Response
    {
        if ($this->isCsrfTokenValid('delete'.$socialnetwork->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($socialnetwork);
            $entityManager->flush();
        }

        return $this->redirectToRoute('socialnetwork_index');
    }
}
