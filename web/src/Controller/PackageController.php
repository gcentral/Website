<?php

namespace App\Controller;

use App\Entity\Package;
use App\Repository\PackageRepository;
use App\Service\PackageService;
use App\Service\SearchService;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Carbon\Carbon;
use Symfony\Component\Serializer\Encoder\JsonEncode;

class PackageController extends AbstractController
{
    /**
     * @Route("/packages", name="package_list")
     */
    public function index(PackageRepository $repo, SearchService $search, Request $request) {
        $q = $request->query->get('q');
        
        $params = [];
        $params['terms'] = explode(' ', $q);

        $results = $search->searchPackages($params);

        return $this->render('page/package/index.html.twig', [
            'packages' => $results['packages'],
        ]);
    }
    
    /**
     * @Route("/packages/update", name="packages_update")
     */
    public function packages_update() {
        return $this->render('page/package/update.html.twig', []);
    }

    /**
     * @Route("/package/{id}", name="package_details")
     */
    public function package_details(Package $package) {
        $versions = $package->getVersions();
        $curVersion = $versions[count($versions) - 1];
        $releaseDate = new Carbon($curVersion->getReleaseDate(), 'UTC');
        $dateStr = $releaseDate->format('F j, Y');
        return $this->render('page/package/details.html.twig', [
            'package' => $package,
            'packageJSON' => json_encode($package),
            'curVersion' => $curVersion,
            'releaseDate' => $dateStr
        ]);
    }
}
