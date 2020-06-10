<?php
/*@author Sandra
* CRUD */
namespace App\Controller\front;

use App\Entity\Company;
use App\Form\CompanyType;
use App\Repository\CompanyRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



/**
 * @Route("/company")
 */
class CompanyController extends AbstractController
{

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * @Route("/", name="company_index", methods={"GET"})
     */
    public function index(CompanyRepository $companyRepository): Response
    {
            
            $user = $this->getUser()->getRoles(['ROLE_PRO']);
            $userAdmin=$this->security->getUser()->getRoles(['ROLE_ADMIN']);
            if ($user) { 
                //affiche que la company associé à l'"id" de "user"
                return $this->render('front/company/index.html.twig', [
            'companies' => $this->security->getUser()->getPro()->getCompanies(),
            ]);
            } elseif($userAdmin) {
                //affiche tout
            //marche pas n'affiche rien
                return $this->render('front/company/index.html.twig', [
                    'companies' => $companyRepository->findAll(),
                    ]);
                }
    }

    /**
     * @Route("/new", name="company_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            $user = $this->security->getUser()->getPro();
            $company->setUser($user);
            
            $entityManager->persist($company);
            $entityManager->flush();

            return $this->redirectToRoute('company_index');
        }

        return $this->render('front/company/new.html.twig', [
            'company' => $company,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="company_show", methods={"GET"})
     */
    public function show(Company $company): Response
    {
        return $this->render('front/company/show.html.twig', [
            'company' => $company,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="company_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Company $company): Response
    {
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('company_index');
        }

        return $this->render('front/company/edit.html.twig', [
            'company' => $company,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="company_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Company $company): Response
    {
        if ($this->isCsrfTokenValid('delete' . $company->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($company);
            $entityManager->flush();
        }

        return $this->redirectToRoute('company_index');
    }
}
