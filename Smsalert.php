<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Smsalert Library file
* Author: SMS Alert (www.smsalert.co.in)
*/
class Smsalert {

	public function __construct () {
		$this->ci =& get_instance();
        $this->username = "Smsalert username";
		$this->password = "Smsalert password";
        $this->senderID = "Smsalert senderid";
	}      

    public function send($to, $message,$schedule=null) 
    {
		$url="https://www.smsalert.co.in/api/push.json?user=$this->username&pwd=$this->password&sender=$this->senderID&mobileno=$to&text=$message";
		if($schedule!=null)
		{
			$url.= "&schedule=$schedule";
		}
		
         $curl = curl_init();
          $message = urlencode($message);
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $result = curl_exec($curl);
        $err = curl_error($curl);
         $data =json_decode($result,true); 
        curl_close($curl);

        if ($err) {
          return "cURL Error #:" . $err;
        } else {
			if($data['status']=='success')
			{

				return $data['description']['desc'];
			}          
        }     
    }
}
?>
