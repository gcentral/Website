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
    public function upload(Request $request)
    {   
        $entityManager = $this->getDoctrine()->getManager();
        
        $form = $this->createForm(ProfileImageType::class);
        $form->handleRequest($request);
        // https://stackoverflow.com/questions/53961605/how-to-upload-image-from-vuejs-to-symfony-with-axios
        
        $data = $request->files->get('profile_image');

        $fileType = $data->guessExtension();

        switch ($fileType) {
            case 'jpeg':
                $fileType = 'jpg';
                break;
            default:
                break;
        }

        $user = $this->getUser();

        $oldFileName = $user->getPictureFileName();

        if ($oldFileName) {
            try{
                $oldFileLocation = $this->getParameter('images_directory').'/'.$oldFileName;
                unlink($oldFileLocation);
            } catch (FileException $e) {
                // File not found, moving on...
                throw new FileException($e->getMessage(), $e->getCode());
            }
        }

        $milliseconds = round(microtime(true) * 1000);
        $hash = md5($milliseconds);
        $filename = $user->getID().'-'.$hash.'.'.$fileType;
        
        $user->setPictureFileName($filename);

        // write changes to database
        $entityManager->persist($user);
        $entityManager->flush(); 

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
