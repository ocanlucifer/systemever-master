<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminProductsController extends \crocodicstudio\crudbooster\controllers\CBController {

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
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "products";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Main Product Type","name"=>"main_type"];
			$this->col[] = ["label"=>"Main Image","name"=>"main_image","image"=>true];
			$this->col[] = ["label"=>"Main Title","name"=>"main_title"];
			$this->col[] = ["label"=>"Lang","name"=>"lang"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Main Product Type','name'=>'main_type','type'=>'select2','validation'=>'required','width'=>'col-sm-9', 'dataenum'=>'i1;i5;i7'];
			$this->form[] = ['label'=>'Main Image','name'=>'main_image','type'=>'upload','validation'=>'required','width'=>'col-sm-9','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Main Title','name'=>'main_title','type'=>'text','validation'=>'required','width'=>'col-sm-9','placeholder'=>'You can only enter the letter only'];

			$this->form[] = ['label'=>'','name'=>'','type'=>'custom','html'=>'<hr>','width'=>'col-sm-10'];

			$this->form[] = ['label'=>'Banner Image','name'=>'banner_image','type'=>'upload','validation'=>'required','width'=>'col-sm-9','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Banner Title','name'=>'banner_title','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Banner Sub Title','name'=>'banner_sub_title','type'=>'text','validation'=>'required','width'=>'col-sm-10'];

			$this->form[] = ['label'=>'','name'=>'','type'=>'custom','html'=>'<hr>','width'=>'col-sm-10'];

			$this->form[] = ['label'=>'Feature Image','name'=>'featured_image','type'=>'upload','validation'=>'required','width'=>'col-sm-9','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Featured Title','name'=>'featured_title','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Featured Sub Title','name'=>'featured_sub_title','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Featured Sort Description','name'=>'featured_sort_description','type'=>'wysiwyg','validation'=>'required','width'=>'col-sm-10'];

			$this->form[] = ['label'=>'','name'=>'','type'=>'custom','html'=>'<hr>','width'=>'col-sm-10'];

			// $this->form[] = ['label'=>'Who Need It? Title','name'=>'who_need_title','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Who Need It?','name'=>'who_need_sub_title','type'=>'text','validation'=>'required','width'=>'col-sm-10'];

			// $this->form[] = ['label'=>'','name'=>'','type'=>'custom','html'=>'<hr>','width'=>'col-sm-10'];
			// $this->form[] = ['label'=>'Subscription Fee (monthly)','name'=>'subscription_fee_monthly','type'=>'money','validation'=>'required','width'=>'col-sm-10'];
			// $this->form[] = ['label'=>'Subscription Fee (annualy)','name'=>'subscription_fee_annualy','type'=>'money','validation'=>'required','width'=>'col-sm-10'];
			// $this->form[] = ['label'=>'Additional User Fee','name'=>'additional_user_fee','type'=>'money','validation'=>'required','width'=>'col-sm-10'];

			$this->form[] = ['label'=>'Lang','name'=>'lang','type'=>'select2','validation'=>'required','width'=>'col-sm-10','dataenum'=>'ID;EN;KOR;'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Title','name'=>'title','type'=>'text','validation'=>'required','width'=>'col-sm-10','placeholder'=>'You can only enter the letter only'];
			//$this->form[] = ['label'=>'Type','name'=>'type','type'=>'select2','validation'=>'required','width'=>'col-sm-10','dataenum'=>'BOLU KUKUS;BAKPIA KUKUS'];
			//$this->form[] = ['label'=>'Price','name'=>'price','type'=>'money','validation'=>'required','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Description','name'=>'description','type'=>'wysiwyg','validation'=>'required','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Varian','name'=>'varian','type'=>'select2','validation'=>'required','width'=>'col-sm-10','dataenum'=>'COKLAT;STRAWBERRY;KACANG HIJAU;KEJU'];
			//$this->form[] = ['label'=>'Shopee Url','name'=>'shopee_url','type'=>'textarea','validation'=>'required','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Tokopedia Url','name'=>'tokopedia_url','type'=>'textarea','validation'=>'required|','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Lang','name'=>'lang','type'=>'select2','validation'=>'required','width'=>'col-sm-10','dataenum'=>'ID;ENG'];
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
			$this->sub_module[] = [
				"label" => "Basic Plan",
				"path" => "basic_plans",
				"button_color" => "success",
				"parent_columns" => "main_title",
				"foreign_key" => "products_id",
				"button_icon" => "fa fa-plane"

			];
			$this->sub_module[] = [
				"label" => "Basic Plan Banner",
				"path" => "basic_plans_banner",
				"button_color" => "primary",
				"parent_columns" => "main_title",
				"foreign_key" => "products_id",
				"button_icon" => "fa fa-image",
			];
			$this->sub_module[] = [
				"label" => "Integrated Module",
				"path" => "integrated_modules",
				"button_color" => "warning",
				"parent_columns" => "main_title",
				"foreign_key" => "products_id",
				"button_icon" => "fa fa-gears",
				'showIf' 	=> "[main_type] != 'i1'",
			];
			$this->sub_module[] = [
				"label" => "Applicable Industry",
				"path" => "business_icons_industries",
				"button_color" => "info",
				"parent_columns" => "main_title",
				"foreign_key" => "products_id",
				"button_icon" => "fa fa-industry",
				'showIf' 	=> "[main_type] != 'i1'",
			];



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
				'label' 	=> 'Accounting Tax consulting Service',
				'color' 	=> 'danger',
				'showIf' 	=> "[main_type] == 'i1'",
				'url'		=> CRUDBooster::mainpath() . "/accountingtaxconsultingservice/[id]"
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
	        $this->script_js = NULL;


            /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code before index table
	        | ----------------------------------------------------------------------
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */

			// $this->pre_index_html = (string)view("admin/form/banner");
			$this->pre_index_html = "";



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



	    //By the way, you can still create your own method in here... :)
		public function postProductbanner(\Illuminate\Http\Request $request)
		{
			dd($request->all());
		}

		public function getAccountingtaxconsultingservice($id)
		{
			$data = [];
			$product = \App\Product::find($id);
			$service = \App\Post::where([
				['tipe', 'accounting_tax_consulting_service'],
				['lang', $product->lang]
			])->first();
			$data['id'] = $id;
			$data['json_content'] = json_decode($service['body']);
			return view("admin/solution/accounting", $data);
		}


		public function postAccountingtaxconsultingservice($id, \Illuminate\Http\Request $request)
		{
			$product = \App\Product::find($id);
			$service = \App\Post::where([
				['tipe', 'accounting_tax_consulting_service'],
				['lang', $product->lang]
			])->first();
			if (empty($service)) {
				$service = new \App\Post;
				$service->tipe = "accounting_tax_consulting_service";
				$service->lang = $product->lang;
			}
			$json = json_encode($request->json_content);
			$service->body = $json;
			// dd($service);
			$service->save();

			return redirect((CRUDBooster::mainpath() . "/accountingtaxconsultingservice/" . $id));
		}

	}
