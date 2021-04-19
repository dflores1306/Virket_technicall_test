<?php
namespace App\Drive;
include_once '../vendor/autoload.php';
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
use GuzzleHttp;
use GuzzleHttp\Utils;

class UploadImage 
{
  
  public function uploadFile($file_name='landing.jpg')
  {
    putenv('GOOGLE_APPLICATION_CREDENTIALS=../app/drive/virketsupport.json');
    $client = new Google_Client();
    $client->useApplicationDefaultCredentials();
    $client->setScopes(['https://www.googleapis.com/auth/drive.file']);

    try{
      $service = new Google_Service_Drive($client);

      $file = new Google_Service_Drive_DriveFile();
      $file->setName($file_name);
      $file->setParents(array("1laHSK4SCWnJ0ruyEBILJGArl_3VHj_li"));
      $file->setDescription("Archivo subido desde virket support");
      $file->setMimeType('image/jpg');
      $file_path='../storage/app/'.$file_name;
      $result = $service->files->create($file,array('data'=> file_get_contents($file_path),
                                                    'mimeType'=> 'image/jpg',
                                                    'uploadType'=> 'media'));

      return 'https://drive.google.com/file/d/'.$result->id.'/view?usp=sharing';
    }catch(Google_Service_Exception $ge){
      $m = json_decode($ge->getMessage());
      return $m->error->message;
    }catch(Exception $e){
      return $e->getMessage();
    }
  }
}

