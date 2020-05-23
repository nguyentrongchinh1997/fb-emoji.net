<?php


namespace App\Http\Controllers;


use App\Services\SiteService;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class SiteController extends Controller
{
    /**
     * @var SiteService
     */
    protected $_siteService;

    /**
     * SiteController constructor.
     * @param SiteService $siteService
     */
    public function __construct(SiteService $siteService)
    {
        $this->_siteService = $siteService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home', [
            'smileysIcons' => $this->_siteService->getIconsByType(SMILEYS),
            'gesturesAndPeopleIcons' => $this->_siteService->getIconsByType(GESTURES_AND_PEOPLE),
            'heartsClothesActivitiesIcons' => $this->_siteService->getIconsByType(HEARTS_CLOTHES_ACTIVITIES),
            'foodsDrinksIcons' => $this->_siteService->getIconsByType(FOODS_DRINKS),
            'animalsIcons' => $this->_siteService->getIconsByType(ANIMALS),
            'plantsNatureWeatherIcons' => $this->_siteService->getIconsByType(PLANTS_NATURE_WEATHER),
            'travelPlacesBuildingsIcons' => $this->_siteService->getIconsByType(TRAVEL_PLACES_BUILDINGS),
            'objectIcons' => $this->_siteService->getIconsByType(OBJECTS),
            'symbolsIcons' => $this->_siteService->getIconsByType(SYMBOLS),
            'flagsIcons' => $this->_siteService->getIconsByType(FLAGS),
            'active' => 'fb-emoji'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lineThrough()
    {
        return view('pages.line_through', [
            'active' => 'line-through'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function qrCode()
    {
        return view('pages.qr_code', [
            'active' => 'qr-code'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createQRCode(Request $request)
    {
        $validator = $this->_siteService->validateCreateQRCode($request);
        if ($validator['success']) {
            $qrCodeData = $this->_siteService->createQRCode($request);
            return response()->json([
                'success' => true,
                'data' => $qrCodeData
            ]);
        } else {
            return response()->json([
                'success' => false,
                'errors' => $validator['errors']
            ]);
        }
    }
}
