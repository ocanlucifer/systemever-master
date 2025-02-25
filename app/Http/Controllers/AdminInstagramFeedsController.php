<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminInstagramFeedsController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = false;
			$this->button_bulk_action = false;
			$this->button_action_style = "button_icon";
			$this->button_add = false;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = false;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "instagram_feeds";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Image","name"=>"image_url", "image" => true];
			$this->col[] = ["label"=>"Instagram Link","name"=>"instagram_link"];
			// $this->col[] = ["label"=>"Lang","name"=>"lang"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Instagram Link','name'=>'instagram_link','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Lang','name'=>'lang','type'=>'select2','validation'=>'required','width'=>'col-sm-10','dataenum'=>'ID;EN'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label"=>"Instagram Link","name"=>"instagram_link","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Image Url","name"=>"image_url","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Lang","name"=>"lang","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
			$this->script_js = '
			
			fetch("https://api.instagram.com/oembed/?url=https://www.instagram.com/p/CL36ekjhkg9/", {
				"headers": {
				  "accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
				  "accept-language": "en-US,en;q=0.9,id;q=0.8,ar;q=0.7",
				  "cache-control": "max-age=0",
				  "sec-fetch-dest": "document",
				  "sec-fetch-mode": "navigate",
				  "sec-fetch-site": "none",
				  "sec-fetch-user": "?1",
				  "upgrade-insecure-requests": "1"
				},
				"referrerPolicy": "strict-origin-when-cross-origin",
				"body": null,
				"method": "GET",
				"mode": "cors",
				"credentials": "include"
			  });
			
			';


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
			*/
			
			$this->pre_index_html = (string)view("admin/form/instagram");
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
			$query->whereRaw($this->table . ".deleted_at is null");
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
	        //Your code here
			// $content = curl_get_contents("https://api.instagram.com/oembed/?url=" . $postdata["instagram_link"]);
			// dd($content);

			$path = $this->instagramGrab($postdata["instagram_link"]);
			$postdata["image_url"] = $path;			
			
		}	    

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }


		public function instagramGrab($url)
		{
			$url = str_replace("https://instagram.com", "https://m.instagram.com", $url);

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Cookie: csrftoken=uB2BGAj51IjVaHJuNf42jU1PWTQcHAJs; ig_did=783F4D10-B83E-4A36-AD12-226D53FB1897; ig_nrcb=1; mid=YEbqXgAEAAHadCy6BtZDBOHx74Xt'
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);

			$doc = new \DOMDocument();
			@$doc->loadHTML($response);

			$xpath = new \DOMXPath($doc);

			$nodes = $xpath->query('//head/meta');

			// echo "<pre>";
			$meta_content = [];
			foreach ($nodes as $v) {
				$i = 0;
				foreach ($v->attributes as $a) {
					++$i;
					if (
						$a->name == "content" && 
						filter_var($a->value, FILTER_VALIDATE_URL)
					) {
						$meta_content[] = $a->value;
					}
				}
			}

			$image_url = $meta_content[0];

			$image = file_get_contents($image_url);

			$filename = md5($image_url);

			file_put_contents(__DIR__ . "/../../../storage/app/uploads/insta_$filename.jpg" , $image);

			$laravel_path = "uploads/insta_$filename.jpg";

			return $laravel_path;
		}

		public function postInstagramscrap()
		{
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => $_POST['link'],
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Cookie: csrftoken=uB2BGAj51IjVaHJuNf42jU1PWTQcHAJs; ig_did=783F4D10-B83E-4A36-AD12-226D53FB1897; ig_nrcb=1; mid=YEbqXgAEAAHadCy6BtZDBOHx74Xt'
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			
			$doc = new \DOMDocument();
			@$doc->loadHTML($response);

			$xpath = new \DOMXPath($doc);

			$nodes = $xpath->query('//script');

			$meta_content = [];
			foreach ($nodes as $v) {
				$meta_content[] = $v;
			}

			$json_string = $meta_content[4]->textContent;
			$json_string = str_replace("window._sharedData = ", "", $json_string);
			$json_string = str_replace(";", "", $json_string);
			$json_object = json_decode($json_string, true);

			// echo "<pre>"; print_r($json_object); exit();

			$list_post = [];
			foreach ($json_object["entry_data"]["ProfilePage"][0]["graphql"]["user"]["edge_owner_to_timeline_media"]["edges"] as $v) {
				// dd($v["node"]["edge_media_to_caption"]["edges"][0]["node"]["text"]);
				$text = base64_encode($v["node"]["edge_media_to_caption"]["edges"][0]["node"]["text"]);
				$list_post[] = [
					'instagram_link' => "https://www.instagram.com/p/" . $v["node"]["shortcode"],
					'image_url' 	 => $this->instagram_media($v["node"]["display_url"]),
					'lang' 			 => 'ALL',
					'body'			 => $text
				];				
			}

			DB::statement("TRUNCATE `instagram_feeds`");

			foreach ($list_post as $v) {
				$instagram = new \App\InstagramFeed;
				$instagram->instagram_link = $v["instagram_link"];
				$instagram->image_url = $v["image_url"];
				$instagram->lang = $v["lang"];
				$instagram->body = $v["body"];
				$instagram->save();
			}

			return redirect(CRUDBooster::mainpath());			
		}
	    //By the way, you can still create your own method in here... :) 

		public function instagram_media($image_url)
		{
			$image = file_get_contents($image_url);
			$filename = md5($image_url);
			file_put_contents(__DIR__ . "/../../../storage/app/uploads/insta_$filename.jpg" , $image);
			$laravel_path = "uploads/insta_$filename.jpg";
			return $laravel_path;
		}
	}