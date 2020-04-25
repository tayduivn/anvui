<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News as NewsModel;

class ApiController extends Controller
{
    private $data = [];
    
    public function getNews(Request $request) {
        header('X-XSS-Protection: 0');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET');
        header('Access-Control-Max-Age: 1000');

        $newsModel = new NewsModel();
        $page = $request->p ?? 1;
        $limit = $request->limit ?? 5;
		$start = ($page - 1)*$limit;
        
        $listNews = $newsModel->getNewses(['status' => 1])->orderBy('created_at', 'DESC')->offset($start)->limit($limit)->get();
        $res = [];

        foreach ($listNews as $key => $value) {
            $seo = json_decode($value['seo'], true);

            $res[$key]['img'] = asset($value['img']);
			$res[$key]['title'] = $value['title'];
			$res[$key]['meta_description'] = !empty($seo['meta_desc']) ? $seo['meta_desc'] : $value['desc'];
			$res[$key]['time'] = $value['created_at']->format('d/m/Y');
			$res[$key]['link'] = route('news.detail.old', [ 'slug' => str_slug($value['title'], "-"), 'id' => $value['id'] ]);
        }

        return response()->json($res);
    }


    function order(){
		$phoneNumber   = $_POST['phoneNumber'];
		$fullName   = $_POST['fullName'];
		
		$_POST['ticketStartDate'] = $_POST['getInTimePlan'];

		// $rt = $this->PostAnvui('https://1-dot-dobody-anvui.appspot.com/general_ticket/create',$_POST);
		$rt = $this->PostAnvui('https://1-dot-dobody-anvui.appspot.com/general_ticket/create',$_POST, '', true);
		header('Content-Type: application/json');
		echo json_encode($rt); 
		die;
	}


	function ordervetet(){
		$phoneNumber   = $_POST['phoneNumber'];
		$fullName   = $_POST['fullName'];
		
		$_POST['ticketStartDate'] = $_POST['getInTimePlan'];

		// $rt = $this->PostAnvui('https://1-dot-dobody-anvui.appspot.com/general_ticket/create',$_POST);
		$rt = $this->PostAnvui('https://dobody-anvui.appspot.com/ticket-listener/create',$_POST, '', true);
		header('Content-Type: application/json');
		echo json_encode($rt); 
		die;
	}


	function getForCustomer(){

		$rt = $this->PostAnvui('https://ticket-dot-dobody-anvui.appspot.com/ticket/getForCustomer',$_POST, '', true);
		header('Content-Type: application/json');
		echo json_encode($rt); 
		die;
	}

    function createnoseatid(){
        $rt = $this->PostAnvui('https://dobody-anvui.appspot.com/ticket/create-no-seat-id',$_POST, '', true);
        header('Content-Type: application/json');
        echo json_encode($rt);
        die;
    }


	function point(){
		$q = $_POST['term'];
		$rt = $this->GetAnvui('https://dobody-anvui.appspot.com/web/point-getlist?page=0&count=10&searchWord='.urlencode($q));
		$data = array();
		$i = 0;
		foreach ($rt['results']['result'] as $key => $value) {
			$i++;
			if($i > 10) break;
			$data[] = array(
				'label' => $value['pointName'],
				'value' => $value['pointName'],
				'id' => $value['pointId']
			); 
		}
		header('Content-Type: application/json');
		echo json_encode($data); 
		die;
    }
    

	function listSchedule(){
		$routeId = $_POST['routeId'];
		$endPointId = $_POST['endPoint'];
		$startPointId = $_POST['startPoint'];
		$date = $_POST['timeStart'];

		if(empty($date)){
			$date = date('d/m/Y');
		}
		$date = explode('-', $date);
		$datetimestamp = (mktime(0,0,0,(int)$date[1],(int)$date[0],(int)$date[2])  + 60*60*24 )* 1000;

		$url = 'https://dobody-anvui.appspot.com/web/find-schedule?page=0&count=100&timeZone=7&startPointId='.$startPointId.'&endPointId='.$endPointId.'&date='.$datetimestamp.'&routeId='.$routeId;

		$rt= $this->GetAnvui($url);
		$data  = $rt['results']['result'];

		foreach ($data as $keysch => &$valuesch) {
			$valuesch['startTime'] = date('H:i d/m/Y',$valuesch['startTime']/1000);
			// $valuesch['link'] = 'http://'.$web['home'].'/dat-ve?tripId='.$valuesch['tripId']; 
			$valuesch['ticketPrice1'] = number_format($valuesch['ticketPrice']);
		}

		header('Content-Type: application/json');
		echo json_encode($data); 
		die; 
	}

    function listSchedule2(){
        $date = $_POST['date'];

        if(empty($date)){
            $date = date('d/m/Y');
        }
        $date = explode('-', $date);
        $_POST['date'] = (mktime(0,0,0,(int)$date[1],(int)$date[0],(int)$date[2]))* 1000;

        $url = 'https://dobody-anvui.appspot.com/schedule/find-schedule-for-user';

        $rt= $this->PostAnvui($url, $_POST, '', true);

        $data  = $rt['results']['result'];

        

        foreach ($data as $keysch => &$valuesch) {
            $valuesch['startTimeUnix'] = $valuesch['startTime'];
            $valuesch['startTime'] = date('H:i d/m/Y',$valuesch['startTime']/1000);
            // $valuesch['link'] = 'http://'.$web['home'].'/dat-ve?tripId='.$valuesch['tripId'];
            $valuesch['ticketPrice1'] = number_format($valuesch['ticketPrice']);
        }

        header('Content-Type: application/json');
        echo json_encode($data);
        die;
    }


    function listSchedule3(){
        

        $url = 'https://ticket-new-dot-dobody-anvui.appspot.com/planfortrip/searchForCustomer';

        $rt= $this->PostAnvui($url, $_POST, '', true);


        $data  = $rt['results'];

        header('Content-Type: application/json');
        echo json_encode($data);
        die;
    }


    function listScheduleNhaTau(){
        

        $url = 'https://nha-tau-an-vui.appspot.com/planfortrip/searchForCustomer';

        $rt= $this->PostAnvui($url, $_POST, '', true);


        $data  = $rt['results'];

        
 

        header('Content-Type: application/json');
        echo json_encode($data);
        die;
    }


    public function getListPointOfCompany($companyId, $count = '1000' ) {
		
		$url = $this->uri . 'https://ticket-dot-dobody-anvui.appspot.com/partner/point/getList';
			
		$params = [
			'page' => 0,
			'count' => $count,
			'companyId' => $companyId
		];

		$header = [
            'Content-Type: application/json',
            sprintf('AV-Partner-Token: %s', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkIjp7InVpZCI6Ik9SRzA4WjFxSEhaQnhreUVmIiwiZnVsbE5hbWUiOiJC4bqjbyBRdWFuZyBU4butIn0sInYiOjAsImlhdCI6MTU1NzExMDA1NX0.L8-5SL_O8W7P89F_vHxLKPYVuApSiEO968j8VJnOAiA')
		];

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		curl_setopt($curl, CURLOPT_POST,1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$res = curl_exec($curl);
		curl_close($curl);
		$body = json_decode($res, true);

		if($body['code'] >= 200 && $body['code'] < 300) {
			return $body['results']['points'];	
		} 
		return [];
	}


	function pointNX(){

		$routeId = $_POST['routeId'];

		$beginOfDay = strtotime("midnight"); 
		$endOfDay   = strtotime("tomorrow", $beginOfDay) - 1;
		$res= $this->GetAnvui('https://ticket-dot-anvui.appspot.com/web/route-view-by-id?page=0&count=10&routeId='.$routeId.'&startDate='.$beginOfDay.'&endDate='.$endOfDay);
        $rt['a1'] =$res['results']['listPoint'];
        $rt['a2'] =array_reverse($res['results']['listPoint']);

        header('Content-Type: application/json');
		echo json_encode($rt); 
		die;
	}


	function pointNX2(){

		$routeId = $_POST['routeId'];

		$beginOfDay = strtotime("midnight"); 
			$endOfDay   = strtotime("tomorrow", $beginOfDay) - 1;
			$res= $this->GetAnvui('https://ticket-dot-anvui.appspot.com/web/route-view-by-id?page=0&count=10&routeId='.$routeId.'&startDate='.$beginOfDay.'&endDate='.$endOfDay);
	 		
	 		$rt['a1'] =$res['results']['listPoint'];
	 		$rt['a2'] =array_reverse($res['results']['listPoint']);
		 
	 		header('Content-Type: application/json');
		echo json_encode($rt); 
		die;
    }
    

	function chuyenAV(){  
		$idAv = $_POST['idAV'];
		
		$url = 'https://ticket-dot-dobody-anvui.appspot.com/route/getList';

		$header = [
		        'Content-Type: application/json',
		    'DOBODY6969: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkIjp7InVpZCI6Ik9SRzAxZ1dTbXI4QTFWYiIsImZ1bGxOYW1lIjoiSG9hbiBEaW5oIn0sInYiOjAsImlhdCI6MTU4MzgyNTY1NH0.mIZn-fpEk9pQl9R4cKvHt_rMoTgWqH3Vxx8TgnuYtL0'
		];
		$params = [
			'page' => 0,
			'count' => 100,
			'companyId' => $idAv
		];

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		curl_setopt($curl, CURLOPT_POST,1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$res = curl_exec($curl);
		curl_close($curl);
		$body = json_decode($res, true);
		$data['chuyen'] = $body['results']['result'];

		header("Content-type: application/json");
		echo json_encode($data); die();
    }
    


	public function GetAnvuiDebug($url,$token){
        if(empty($token)){
            $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ2IjowLCJkIjp7InVpZCI6IkFETTExMDk3Nzg4NTI0MTQ2MjIiLCJmdWxsTmFtZSI6IkFkbWluIHdlYiIsImF2YXRhciI6Imh0dHBzOi8vc3RvcmFnZS5nb29nbGVhcGlzLmNvbS9kb2JvZHktZ29ub3cuYXBwc3BvdC5jb20vZGVmYXVsdC9pbWdwc2hfZnVsbHNpemUucG5nIn0sImlhdCI6MTQ5MjQ5MjA3NX0.PLipjLQLBZ-vfIWOFw1QAcGLPAXxAjpy4pRTPUozBpw';
        }
        $request_header = [
            'Content-Type:application/json',
            sprintf('DOBODY6969: %s', $token)
        ];
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url.'&timeZone=7');
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch,CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch,CURLOPT_TIMEOUT, 30);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_header);

        $response = curl_exec($ch);
        return $response;
    }


	public function GetAnvui($url,$token){
        if(empty($token)){
            $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ2IjowLCJkIjp7InVpZCI6IkFETTExMDk3Nzg4NTI0MTQ2MjIiLCJmdWxsTmFtZSI6IkFkbWluIHdlYiIsImF2YXRhciI6Imh0dHBzOi8vc3RvcmFnZS5nb29nbGVhcGlzLmNvbS9kb2JvZHktZ29ub3cuYXBwc3BvdC5jb20vZGVmYXVsdC9pbWdwc2hfZnVsbHNpemUucG5nIn0sImlhdCI6MTQ5MjQ5MjA3NX0.PLipjLQLBZ-vfIWOFw1QAcGLPAXxAjpy4pRTPUozBpw';
        }
        $request_header = [
            'Content-Type:application/json',
            sprintf('DOBODY6969: %s', $token)
        ];
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url.'&timeZone=7');
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch,CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch,CURLOPT_TIMEOUT, 30);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_header);

        $response = curl_exec($ch);
        return json_decode($response,1);
    }


    public function PostAnvui($url,$data,$token,$isJson){
     	$data['timeZone'] = 7;
        if(empty($token)){
            $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ2IjowLCJkIjp7InVpZCI6IkFETTExMDk3Nzg4NTI0MTQ2MjIiLCJmdWxsTmFtZSI6IkFkbWluIHdlYiIsImF2YXRhciI6Imh0dHBzOi8vc3RvcmFnZS5nb29nbGVhcGlzLmNvbS9kb2JvZHktZ29ub3cuYXBwc3BvdC5jb20vZGVmYXVsdC9pbWdwc2hfZnVsbHNpemUucG5nIn0sImlhdCI6MTQ5MjQ5MjA3NX0.PLipjLQLBZ-vfIWOFw1QAcGLPAXxAjpy4pRTPUozBpw';
        }
        if($isJson) {
            $request_header = [
                'Content-Type:application/json',
                sprintf('DOBODY6969: %s', $token)
            ];
            $data = json_encode($data);
        } else {
            $request_header = [
                'Content-Type:application/x-www-form-urlencoded',
                sprintf('DOBODY6969: %s', $token)
            ];
            $data = http_build_query($data);
        }

        $ch = curl_init();

     
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_header);
 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec ($ch);

        curl_close ($ch); 
        return json_decode($response,1);
    }


    function PostFan($url,$data,$token,$isJson){
	 	// $data['timeZone'] = 7;
	    // if(empty($token)){
	    //     $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ2IjowLCJkIjp7InVpZCI6IkFETTExMDk3Nzg4NTI0MTQ2MjIiLCJmdWxsTmFtZSI6IkFkbWluIHdlYiIsImF2YXRhciI6Imh0dHBzOi8vc3RvcmFnZS5nb29nbGVhcGlzLmNvbS9kb2JvZHktZ29ub3cuYXBwc3BvdC5jb20vZGVmYXVsdC9pbWdwc2hfZnVsbHNpemUucG5nIn0sImlhdCI6MTQ5MjQ5MjA3NX0.PLipjLQLBZ-vfIWOFw1QAcGLPAXxAjpy4pRTPUozBpw';
	    // }
	    $request_header = [
	            'application/json; charset=UTF-8',            ];
	        $data = json_encode($data);

	    $ch = curl_init();

	 
	    curl_setopt($ch, CURLOPT_URL,$url);
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $request_header);

	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	    $response = curl_exec ($ch);

	    curl_close ($ch); 
	    return json_decode($response,1);
	}


}
