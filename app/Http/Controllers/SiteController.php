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

    public function video()
    {
        return view('pages.video', ['active' => 'video']);
    }

    public function convert(Request $request)
    {
        $link = $this->get_web_page($request->url);

        if ($link == NULL) {
            return 'Không thể download được video';
        } else {
            return view('pages.video_detail', ['link' => $link]);
        }
    }

    public function uid()
    {
        return view('pages.uid', ['active' => 'uid']);
    }

    public function getUid(Request $request)
    {
        $this->validate($request,
            [
                'url' => 'required'
            ]
        );
        $result = $this->_siteService->getUid($request->all());

        return view('pages.uid', [
            'active' => 'uid',
            'code' => $result,
        ]);
    }

    public function get_web_page($url) {
        try {
            $options = array(
                CURLOPT_RETURNTRANSFER => true,   
                CURLOPT_HEADER         => false, 
                CURLOPT_FOLLOWLOCATION => true,   
                CURLOPT_MAXREDIRS      => 10,    
                CURLOPT_ENCODING       => "",     
                CURLOPT_USERAGENT      => "httzip.com", 
                CURLOPT_AUTOREFERER    => true,   
                CURLOPT_CONNECTTIMEOUT => 120,    
                CURLOPT_TIMEOUT        => 120,    
            ); 
            $ch = curl_init($url);
            curl_setopt_array($ch, $options);
            $content = curl_exec($ch);
            curl_close($ch);
            $result = preg_match_all('/hd_src:"([^"]*)"/', $content, $hd);
            $result_sd = preg_match_all('/sd_src:"([^"]*)"/', $content, $sd);
            $result_img = preg_match_all('/<meta property="og:image" content="([^"]*)"/', $content, $image);
            $result_desc = preg_match_all('/<meta property="og:description" content="([^"]*)"/', $content, $description);
            if (!isset($hd[1][0]) && !isset($sd[1][0])) {
                return NULL;
            } else {
                if (!empty($hd[1][0])) {
                    $link = array(
                        'hd' => $hd[1][0],
                        'sd' => $sd[1][0],
                    );

                    return $link;
                } else {
                    $link = array(
                        'hd' => $sd[1][0],
                        'sd' => $sd[1][0],
                    );

                    return $link;
                }
            }
        } catch (\Exception $e) {
            return NULL;
        }
    }
}
