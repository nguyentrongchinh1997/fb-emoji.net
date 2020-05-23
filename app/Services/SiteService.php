<?php


namespace App\Services;


use App\Repositories\Icon\IconRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/**
 * Class SiteService
 * @package App\Services
 */
class SiteService
{
    /**
     * @var IconRepositoryInterface
     */
    protected $_iconRepository;

    /**
     * SiteService constructor.
     * @param IconRepositoryInterface $iconRepository
     */
    public function __construct(IconRepositoryInterface $iconRepository)
    {
        $this->_iconRepository = $iconRepository;
    }

    /**
     * @return mixed
     */
    public function getAllIcons()
    {
        return $this->_iconRepository->all();
    }

    /**
     * @param $type
     * @return mixed
     */
    public function getIconsByType($type)
    {
        return $this->_iconRepository->getIconsByType($type);
    }

    /**
     * @param $request
     * @return array
     */
    public function validateCreateQRCode($request)
    {
        $validator = Validator::make($request->all(), [
            'qr-logo' => 'nullable|mimes:jpeg,jpg,png,gif|max:5000',
            'background-color' => 'required',
            'color' => 'required',
            'size' => 'required',
            'quality' => 'required',
            'qr-code-type' => 'required|numeric',
            'qr-url' => 'nullable',
            'qr-content' => 'nullable',
            'qr-network-name' => 'nullable',
            'qr-network-type' => 'nullable',
            'password' => 'nullable',
            'email-to' => 'nullable|email',
            'email-subject' => 'nullable',
            'email-content' => 'nullable',
        ]);
        if ($validator->fails()) {
            return [
                'success' => false,
                'errors' => $validator->errors()
            ];
        }
        return [
            'success' => true
        ];
    }

    /**
     * @param $request
     * @return string
     */
    public function createQRCode($request)
    {
        try {
            $color = $request->get('color');
            $backgroundColor = $request->get('background-color');
            $colorRGB = hex_2_rgb($color);
            $bgColorRGB = hex_2_rgb($backgroundColor);
            $size = $request->get('size');
            $quality = $request->get('quality');
            $qrCodeType = $request->get('qr-code-type');

            if ($qrCodeType == 1) {
                $qrUrl = $request->get('qr-url');
                return QrCode::size($size)
                    ->backgroundColor($bgColorRGB['r'], $bgColorRGB['g'], $bgColorRGB['b'])
                    ->color($colorRGB['r'], $colorRGB['g'], $colorRGB['b'])
                    ->errorCorrection($quality)
                    ->encoding('UTF-8')
                    ->generate($qrUrl);
            } elseif ($qrCodeType == 2) {
                $qrContent = $request->get('qr-content');
                return QrCode::size($size)
                    ->backgroundColor($bgColorRGB['r'], $bgColorRGB['g'], $bgColorRGB['b'])
                    ->color($colorRGB['r'], $colorRGB['g'], $colorRGB['b'])
                    ->errorCorrection($quality)
                    ->encoding('UTF-8')
                    ->generate($qrContent);
            } elseif ($qrCodeType == 3) {
                $networkName = $request->get('network-name');
                $networkType = $request->get('network-type');
                $password = $request->get('password');
                return QrCode::size($size)
                    ->backgroundColor($bgColorRGB['r'], $bgColorRGB['g'], $bgColorRGB['b'])
                    ->color($colorRGB['r'], $colorRGB['g'], $colorRGB['b'])
                    ->errorCorrection($quality)
                    ->encoding('UTF-8')
                    ->wiFi([
                        'ssid' => $networkName,
                        'encryption' => $networkType,
                        'password' => $password
                    ]);
            } elseif ($qrCodeType == 4) {
                $emailTo = $request->get('email-to');
                $emailSubject = $request->get('email-subject');
                $emailContent = $request->get('email-content');
                return QrCode::size($size)
                    ->backgroundColor($bgColorRGB['r'], $bgColorRGB['g'], $bgColorRGB['b'])
                    ->color($colorRGB['r'], $colorRGB['g'], $colorRGB['b'])
                    ->errorCorrection($quality)
                    ->encoding('UTF-8')
                    ->email($emailTo, $emailSubject, $emailContent);
            }
        } catch (\Exception $exception) {
            return '';
        }
    }
}
