<?php

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

use Carbon\Carbon;

use App\Service\UserService;
use App\Entity\User;
use App\Form\ProfileImageType;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Flex\Unpack\Result;

class UserAPIController extends AbstractController
{
    /**
     * @Route("/profile/updatefullname", name="update_full_name")
     */
    public function update_full_name(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $fullname = $request->getContent();

        // change full name
        $user = $this->getUser();
        $user->setFullName($fullname);

        // write changes to database
        $entityManager->persist($user);
        $entityManager->flush(); 

        return new Response('Updated the data:'.$user->getFullName());
    }

    /**
     * @Route("/profile/updatedisplayname", name="update_display_name")
     */
    public function update_display_name(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $displayname = $request->getContent();

        // change display name
        $user = $this->getUser();
        $user->setDisplayName($displayname);

        // write changes to database
        $entityManager->persist($user);
        $entityManager->flush(); 

        return new Response('Updated the data:'.$user->getDisplayName());
    }

    /**
     * @Route("/profile/updatelocation", name="update_location")
     */
    public function update_location(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $location = $request->getContent();

        // change location
        $user = $this->getUser();
        $user->setLocation($location);

        // write changes to database
        $entityManager->persist($user);
        $entityManager->flush(); 

        return new Response('Updated the data:'.$user->getLocation());
    }

    /**
     * @Route("/profile/uploadimage", name="upload", methods={"POST"})
     */
    public function upload(Request $request, SluggerInterface $slugger)
    {   
        $entityManager = $this->getDoctrine()->getManager();
        
        $form = $this->createForm(ProfileImageType::class);
        $form->handleRequest($request);
        // https://stackoverflow.com/questions/53961605/how-to-upload-image-from-vuejs-to-symfony-with-axios
        
        // CRTD this is not quite waht we discussed, but after ramming my head into the wall with the formData, I found the above example
        // It's "easier" to retrieve the file from the request directly, as oposed to pressing it into the form.
        $data = $request->files->get('profile_image');

        $fileType = $data->guessExtension();

        switch ($fileType) {
            case 'jpeg':
                $fileType = 'jpg';
                break;
            default:
                break;
        }

        // CRTD The way I understood our discussion, we use the user name as file name and thus, only need to store the file type, which vue needs. 
        // If this is not correct, let me know. I now know how to add another field and the symfony example includes randomizing the names.
        $user = $this->getUser();
        $user->setFileType($fileType);

        // write changes to database
        $entityManager->persist($user);
        $entityManager->flush(); 

        $filename = $user->getID().'.'.$fileType;

        try {
            $movedFile = $data->move(
                $this->getParameter('images_directory'),
                $filename
            );
        } catch (FileException $e) {
            throw new FileException($e->getMessage(), $e->getCode());
        }

        return new Response($movedFile);
    }
}
