<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminPostController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "title";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = false;
			$this->button_show = false;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "post";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Featured Image","name"=>"featured_image","image"=>true];
			$this->col[] = ["label"=>"Title","name"=>"title"];
			$this->col[] = ["label"=>"Lang","name"=>"lang"];
			$this->col[] = ["label"=>"Is Show","name"=>"is_show", "callback" => function($r){
				return $r->is_show == 1 ? "Showed" : "Hidden";
			}];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Featured Image','name'=>'featured_image','type'=>'upload','validation'=>'required','width'=>'col-sm-10','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Title','name'=>'title','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Slug','name'=>'slug','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Body','name'=>'body','type'=>'wysiwyg','validation'=>'required','width'=>'col-sm-10', "callback" => function($row){
				return urldecode(base64_decode($row->body));
			}];
			// $this->form[] = ['label'=>'Tipe','name'=>'tipe','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'ABOUT US;TERMS AND CONDITION;PRIVACY POLICY;ARTICLE'];
			$this->form[] = ["label"=>"Tag","name"=>"body","type"=>"custom","html"=> view('admin/form/tag')];
			$this->form[] = ['label'=>'Lang','name'=>'lang','type'=>'select2','validation'=>'required','width'=>'col-sm-10','dataenum'=>'ID;EN'];
			$this->form[] = ["label"=>"Seo Meta","name"=>"body","type"=>"custom","html"=> view('admin/form/seo', ['type' => 'post'])];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label"=>"Title","name"=>"title","type"=>"text","required"=>TRUE,"validation"=>"required|string|min:3","placeholder"=>"You can only enter the letter only"];
			//$this->form[] = ["label"=>"Slug","name"=>"slug","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Featured Image","name"=>"featured_image","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Body","name"=>"body","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Tipe","name"=>"tipe","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
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
			$this->addaction[] = [
				"label" => "Hide",
				"url" => CRUDBooster::mainpath() . "/hide/[id]",
				"icon" => "fa fa-eye",
				"color" => "danger",
				"showIf" => "[is_show] == '1'",
			];
			$this->addaction[] = [
				"label" => "Show",
				"url" => CRUDBooster::mainpath() . "/show/[id]",
				"icon" => "fa fa-eye",
				"color" => "primary",
				"showIf" => "[is_show] == '0'",
			];


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
	        $this->script_js = '$(document).ready(function(){ 
				setInterval(function(){ 
					var html = $(".note-editable").html();
					var base64 = window.btoa(encodeURIComponent(html));
					$("#textarea_body").val(base64);
				}, 1000);

				$("#title").keyup(function(){
					$("#slug").val(slug($("#title").val()));
				});
			})';


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
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
			$query->where("tipe", "ARTICLE");
	            
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
			$postdata['tipe'] = 'ARTICLE';
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
			$postdata['slug'] = slugify($postdata["title"]);

			$seo = new \App\SeoTag;
			$seo->type = "post";
			$seo->reff_id = $id;
			$seo->location = "post";
			$seo->title = $_POST["seo_title"];
			$seo->keyword = $_POST["seo_keyword"];
			$seo->description = $_POST["seo_description"];
			$seo->script = $_POST["seo_script"];
			$seo->save();

			if (!empty($_POST['tag'])) {
				foreach ($_POST['tag'] as $tag) {
					$post_meta = new \App\PostMeta;
					$post_meta->post_id = $id;
					$post_meta->meta_key = "tag";
					$post_meta->meta_value = $tag;					
					$post_meta->save();
				}
			}
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
			$postdata['slug'] = slugify($postdata["title"]);
			$post_metas = \App\PostMeta::where("post_id", $id)->get();
			foreach ($post_metas as $p) {
				$p->delete();
			}
			if (!empty($_POST['tag'])) {
				foreach ($_POST['tag'] as $tag) {
					$post_meta = new \App\PostMeta;
					$post_meta->post_id = $id;
					$post_meta->meta_key = "tag";
					$post_meta->meta_value = $tag;					
					$post_meta->save();
				}
			}
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
			$seo = \App\SeoTag::where([
				["type", "post"],
				["reff_id", $id],
			])->first();			

			if (!empty($seo)) {	
				$seo->type = "post";
				$seo->reff_id = $id;
				$seo->location = "post";
				$seo->title = $_POST["seo_title"];
				$seo->keyword = $_POST["seo_keyword"];
				$seo->description = $_POST["seo_description"];
				$seo->script = $_POST["seo_script"];
				$seo->save();
			} else {
				$seo = new \App\SeoTag;
				$seo->type = "post";
				$seo->reff_id = $id;
				$seo->location = "post";
				$seo->title = $_POST["seo_title"];
				$seo->keyword = $_POST["seo_keyword"];
				$seo->description = $_POST["seo_description"];
				$seo->script = $_POST["seo_script"];
				$seo->save();
	    	}
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



		//By the way, you can still create your own method in here... :) 
		
		public function getAbout()
		{
			$data = [];
			$data['data']['tentangKami'] = "";
			$data['data']['misiKami'] = "";
			$data['data']['img_1'] = "";
			$data['data']['img_2'] = "";
			$data['data']['img_3'] = "";
			$data['data']['img_4'] = "";
			$data['data']['img_5'] = "";

			$post = \App\Post::where("tipe", "ABOUT US")->first();
			if(!empty($post)){

				//tentangKami
				$tentangKami = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "tentangKami"]
				])->first();
				$data['data']['tentangKami'] = $tentangKami->meta_value;

				//misiKami
				$misiKami = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "misiKami"]
				])->first();
				$data['data']['misiKami'] = $misiKami->meta_value;
			
				$img_1 = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "img_1"]
				])->first();
				$data['data']['img_1'] = $img_1->meta_value;

				$img_2 = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "img_2"]
				])->first();
				$data['data']['img_2'] = $img_2->meta_value;


				$img_3 = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "img_3"]
				])->first();
				$data['data']['img_3'] = $img_3->meta_value;

				$img_4 = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "img_4"]
				])->first();
				$data['data']['img_4'] = $img_4->meta_value;

				$img_5 = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "img_5"]
				])->first();
				$data['data']['img_5'] = $img_5->meta_value;
			}
			
			if(!CRUDBooster::isView()) CRUDBooster::redirect(CRUDBooster::adminPath(),trans('crudbooster.denied_access'));
			return $this->cbView('admin/post/aboutus', $data);
		}


		public function postAbout(\Illuminate\Http\Request $request){
			$post = \App\Post::where("tipe", "ABOUT US")->first();
			if (empty($post)){
				$post = new \App\Post;
				$post->title = "About Us";
				$post->featured_image = "";
				$post->body = "";
				$post->slug = "about-us";
				$post->tipe= "ABOUT US";
				$post->save();
			}

			$this->replacePostMeta($post->id, "tentangKami", $request->tentangKami);
			$this->replacePostMeta($post->id, "misiKami", $request->misiKami);

			$image_1 = "";
			if ($request->img_1) {
				$image_1 = $request->img_1->store("public");
				$this->replacePostMeta($post->id, "img_1", $image_1);
			}
			
			$image_2 = "";
			if ($request->img_2) {
				$image_2 = $request->img_2->store("public");
				$this->replacePostMeta($post->id, "img_2", $image_2);
			}
			
			$image_3 = "";
			if ($request->img_3) {
				$image_3 = $request->img_3->store("public");
				$this->replacePostMeta($post->id, "img_3", $image_3);
			}
			
			$image_4 = "";
			if ($request->img_4) {
				$image_4 = $request->img_4->store("public");
				$this->replacePostMeta($post->id, "img_4", $image_4);
			}
			
			$image_5 = "";
			if ($request->img_5) {
				$image_5 = $request->img_5->store("public");
				$this->replacePostMeta($post->id, "img_5", $image_5);
			}
			
			return redirect(CRUDBooster::mainpath() . "/about");
	
		}


		public function getContactus()
		{
			$data = [];
			$data['data']['address'] = "";
			$data['data']['phones'] = "";
			$data['data']['emails'] = "";
			$data['data']['google_map'] = "";
 
			//define curent data , if there any
			$post = \App\Post::where("tipe", "CONTACT US")->first();
			if (!empty($post)) {
				//address
				$address = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "address"]
				])->first();
				$data['data']['address'] = $address->meta_value;

				//phone
				$phones = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "phones"]
				])->first();
				$data['data']['phones'] = $phones->meta_value;

				//emails
				$emails = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "emails"]
				])->first();
				$data['data']['emails'] = $emails->meta_value;

				//google_map
				$google_map = $post_meta = \App\PostMeta::where([
					["post_id", $post->id],
					["meta_key", "google_map"]
				])->first();
				$data['data']['google_map'] = $google_map->meta_value;
			}
			
			if(!CRUDBooster::isView()) CRUDBooster::redirect(CRUDBooster::adminPath(),trans('crudbooster.denied_access'));
			return $this->cbView('admin/post/contactus', $data);
		}


		public function postContactus(\Illuminate\Http\Request $request)
		{			
			//create or update post
			$post = \App\Post::where("tipe", "CONTACT US")->first();
			if (empty($post)) {			
				$post = new \App\Post;
				$post->title = "Contact Us";
				$post->featured_image = "";
				$post->body = "";
				$post->slug = "contact-us";
				$post->tipe = "CONTACT US";
				$post->save();
			}			

			//meta - meta
			$this->replacePostMeta($post->id, "address", $request->address);
			$this->replacePostMeta($post->id, "phones", $request->phones);
			$this->replacePostMeta($post->id, "emails", $request->emails);
			$this->replacePostMeta($post->id, "google_map", $request->google_map);

			return redirect(CRUDBooster::mainpath() . "/contactus");
		}

		public function replacePostMeta($post_id, $key, $value)
		{
			$postmeta = \App\PostMeta::where([
				["post_id", $post_id],
				["meta_key", $key]
			])->first();
			if (empty($postmeta)) {
				$postmeta = new \App\PostMeta;
				$postmeta->post_id = $post_id;
				$postmeta->meta_key = $key;	
				$postmeta->meta_value = "";
				$postmeta->save();
			}
			$postmeta->post_id = $post_id;
			$postmeta->meta_key = $key;
			$postmeta->meta_value = $value;
			$postmeta->save();

		}

		
		public function getTermconditions()
		{
			
			$data = [];
		
 
			//define curent data , if there any
			$data["data"] = \App\Post::where("tipe", "TERM AND CONDITIONS")->first();

			if(!CRUDBooster::isView()) CRUDBooster::redirect(CRUDBooster::adminPath(),trans('crudbooster.denied_access'));
			return $this->cbView('admin/post/termconditions', $data);
		}

		public function postTermconditions(\Illuminate\Http\Request $request){
			
			$post = \App\Post::where("tipe", "TERM AND CONDITIONS")->first();
			if (empty($post)) {			
				$post = new \App\Post;
			}			
			$post->title = "Term and Conditions";
			$post->featured_image = "";
			$post->body = $request->termConditions;
			$post->slug = "term-and-conditions";
			$post->tipe = "TERM AND CONDITIONS";
			$post->save();
			// $post->$request->$termConditions;
			return redirect(CRUDBooster::mainpath() . "/termconditions");
		}

		public function getPrivacypolicy()
		{
			
			$data = [];
			
 
			//define curent data , if there any
			$data["data"] = \App\Post::where("tipe", "PRIVACY POLICY")->first();
			
			if(!CRUDBooster::isView()) CRUDBooster::redirect(CRUDBooster::adminPath(),trans('crudbooster.denied_access'));
			return $this->cbView('admin/post/privacypolicy', $data);
		}

		public function postPrivacypolicy(\Illuminate\Http\Request $request){
			
			$post = \App\Post::where("tipe", "PRIVACY POLICY")->first();
			if (empty($post)) {			
				$post = new \App\Post;
				
			}	
			$post->title = "Privacy Policy";
			$post->featured_image = "";
			$post->body = $request->privacyPolicy;
			$post->slug = "privacy-policy";
			$post->tipe = "PRIVACY POLICY";
			$post->save();

			// $post->$id->request->Termconditions;
			return redirect(CRUDBooster::mainpath() . "/privacypolicy");
		}


		// terbarukan

		public function getPricing()
		{
			$post = \App\Post::where([
				['tipe', 'pricing'],
				['lang', get('lang', 'EN')]
			])->first();
			$data["json_content"] = json_decode($post->body);
			return view("admin/pricing/pricing", $data);
		}

		public function postPricing(\Illuminate\Http\Request $request)
		{
			$post = \App\Post::where([
				['tipe', 'pricing'],
				['lang', get('lang', 'EN')]
			])->first();
			if (empty($post)) {
				$post = new \App\Post;
				$post->tipe = "pricing";
				$post->lang = get('lang', 'EN');
			}
			$json = json_encode($request->json_content);
			$post->body = $json;
			$post->save();

			return redirect((CRUDBooster::mainpath() . "/pricing"));
		}

		public function getSupportguide()
		{
			$post = \App\Post::where([
				['tipe', 'support-guide'],
				['lang', get('lang', 'EN')]
			])->first();
			// dd($post);
			$data["json_content"] = json_decode($post->body);
			return view("admin/support/support", $data);
		}

		public function postSupportguide(\Illuminate\Http\Request $request)
		{
			$post = \App\Post::where([
				['tipe', 'support-guide'],
				['lang', get('lang', 'EN')]
			])->first();
			if (empty($post)) {
				$post = new \App\Post;
				$post->tipe = "support-guide";
			}
			$json = json_encode($request->json_content);
			$post->body = $json;
			$post->lang = get('lang', 'EN');
			$post->save();
			return redirect((CRUDBooster::mainpath() . "/supportguide" . "?lang=" . get('lang', 'EN')));
		}

		public function getHide($id)
		{
			$post = \App\Post::find($id);
			$post->is_show = 0;
			$post->save();

			return redirect()->back();
		}

		public function getShow($id)
		{
			$post = \App\Post::find($id);
			$post->is_show = 1;
			$post->save();

			return redirect()->back();
		}

	}