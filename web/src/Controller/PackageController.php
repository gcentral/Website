<?php

namespace App\Controller;

use App\Entity\Package;
use App\Repository\PackageRepository;
use App\Service\PackageService;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Carbon\Carbon;

class PackageController extends AbstractController
{
    /**
     * @Route("/packages", name="package_list")
     */
    public function index(PackageRepository $repo, PackageService $ps, Request $request) {
        $q = $request->query->get('q');
        $packages = [];

        if (empty($q)) {
            $packages = $repo->findAll();
        } else {
            $terms = explode(' ', $q);

            $pkgs = [];

            foreach ($terms as $term) {
                $p = []; // results for term
                $p = array_merge($p, $ps->lookupBy(['name' => $term]));
                $p = array_merge($p, $ps->lookupBy(['description' => $term]));

                foreach ($p as $package) {
                    $name = $package->getName();

                    if (!array_key_exists($name, $pkgs)) {
                        $pkgs[$name] = [
                            'count' => 1,
                            'package' => $package
                        ];
                    } else {
                        $pkgs[$name]['count'] += 1;
                    }
                }
            }

            $count = [];
            foreach ($pkgs as $n => $p) {
                $count[$n] = $p['count'];
            }
            arsort($count);

            foreach($count as $n => $c) {
                $packages[] = $pkgs[$n]['package'];
            }
        }

        return $this->render('page/package/index.html.twig', [
            'packages' => $packages,
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
            'curVersion' => $curVersion,
            'releaseDate' => $dateStr
        ]);
    }
}
