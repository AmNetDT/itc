<?php 
class DbQuery{

	public static function getAllOutletForPermissionUpdate(){
		$init = "update outlets set outlet_waiver = ? where id = ?";
		return $init; 
	}

	public static function getAllOutletForPermission(){
		$init = "select b.id, b.outletname, b.urno, b.customerno, b.outlet_waiver 
		        from employee_outlet a, outlets b
				where a.outlet_id = b.id
				and a.employee_id = ?
				order by b.outletname";
		return $init; 
	}

    public static function getDepots(){
		$init = " 
		select b.id , b.name
		from employee_region a, depots b
		where region_id = ?
		and a.depot_id = b.id
			";
		return $init; 
	}

	public static function getDepotAdmin(){
		$init = " 
		select b.id , b.name
		from employee_region a, depots b
		where a.depot_id = b.id
		";
		return $init; 
	}

	public static function getDepotSupervisor(){
		$init = " 
		SELECT b.id , b.name
		FROM employee_region a, depots b
		WHERE a.depot_id = b.id
		and a.depot_id = ?
		";
		return $init; 
	}
	
	public static function getVehicle(){
		$init = "select id, name  from vehicles";
		return $init; 
	}
	
	public static function getDivision(){
		$init = "select id, name  from divisions";
		return $init; 
	}
	
	public static function getDevicebrand(){
		$init = "select id, brand, model from device_brand";
		return $init; 
	}
	
	public static function getDeviceStatus(){
		$init = "select id, name from device_status";
		return $init; 
	}
	
	public static function getUserDetailsForChange(){
		$init = "select id, first_name, middle_name, last_name, employee_code, 
		customer_code, phone_no, email, phone_imei, username, password, phone_fa_code,
		bike_fa_code 
		from employees where id = ?";
		return $init; 
	}
	
	public static function getAllUserModules(){
		$init = "select a.id, b.name as na, c.name as ch from employee_module a, modules b, channels c
		where a.employee_id =  ?
		and a.module_id = b.id
		and a.channel_id = c.id";
		return $init; 
	}
	
	public static function getAllAppModules(){
		$init = "select id, name from modules";
		return $init; 
	}
	
	public static function getAllAppChannel(){
		$init = "select id, name from channels where id = 2";
		return $init; 
	}
	
	//this is the first correct one
	public static function UserCategotyAndPriv(){
		$init = "select CONCAT(first_name,' ',last_name) as name, syscategory_id, region_id, depots_id from employees where id = ?";
		return $init; 
	}




	public static function sysMonitorList(){
		$init = " 
		SELECT  a.id, a.employee_code as ecode, CONCAT(a.first_name,' ',a.middle_name,' ',a.last_name) as fullname,
		(select name from depots where  id = a.depots_id) as depots, 
		(select name from regions where  id = a.region_id) as regions,
		(select name from areas where  id = a.area_id) as areas, 
		(select name from employee_status where id = a.employee_status_id) as issues, 
		(select name from employee_action_taken where id = a.employee_action_taken_id) as actions,
		(select name from syscategory where id = a.syscategory_id) as syscat,
		(select count(id) from employee_outlet where employee_id = a.id) as total_outlets
		FROM employees a		
		WHERE a.region_id = ? AND a.syscategory_id in (2,4, 6)  order by a.first_name";
		return $init; 
	}

	//AND a.activate = 'YES'

	public static function sysAdminList() {
		$init = " 
		SELECT  a.id, a.employee_code as ecode, CONCAT(a.first_name,' ',a.middle_name,' ',a.last_name) as fullname,
		(select name from depots where  id = a.depots_id) as depots, 
		(select name from regions where  id = a.region_id) as regions,
		(select name from areas where  id = a.area_id) as areas, 
		(select name from employee_status where id = a.employee_status_id) as issues, 
		(select name from employee_action_taken where id = a.employee_action_taken_id) as actions,
		(select name from syscategory where id = a.syscategory_id) as syscat,
		(select count(id) from employee_outlet where employee_id = a.id) as total_outlets
		FROM employees a		
		WHERE a.syscategory_id in (1,2,3,4,5,6) order by a.first_name";
		return $init; 
	}

	public static function sysSupervisorList(){
		$init = " 
		SELECT  a.id, a.employee_code as ecode, CONCAT(a.first_name,' ',a.middle_name,' ',a.last_name) as fullname,
		(select name from depots where  id = a.depots_id) as depots, 
		(select name from regions where  id = a.region_id) as regions,
		(select name from areas where  id = a.area_id) as areas, 
		(select name from employee_status where id = a.employee_status_id) as issues, 
		(select name from employee_action_taken where id = a.employee_action_taken_id) as actions,
		(select name from syscategory where id = a.syscategory_id) as syscat,
		(select count(id) from employee_outlet where employee_id = a.id) as total_outlets
		FROM employees a		
		WHERE a.region_id = ? AND a.syscategory_id = 2 AND a.depots_id = ? order by a.first_name";
		return $init; 
	}
	
	public static function userIssues(){
		$init = " 
		 update employees set issues = ?  WHERE id = ?";
		 return $init; 
	}

	public static function userStatus(){
		$init = " 
		 update employees set actions= ?  WHERE id = ?";
		 return $init; 
	}

	public static function recycleSales(){
		$init = " 
		select a.id as employee_id, b.outletname, b.id as outlet_id, b.urno as urno, 
		(select mon from employee_recycle where employee_outlets_id = a.id and week = ? limit 1) as mon,
		(select tue from employee_recycle where employee_outlets_id = a.id and week = ? limit 1) as tue,
		(select wed from employee_recycle where employee_outlets_id = a.id and week = ? limit 1) as wed,
		(select thur from employee_recycle where employee_outlets_id = a.id and week = ? limit 1) as thur,
		(select fri from employee_recycle where employee_outlets_id = a.id and week = ? limit 1) as fri,
		(select sat from employee_recycle where employee_outlets_id = a.id and week = ? limit 1) as sat,
		(select sun from employee_recycle where employee_outlets_id = a.id and week = ? limit 1) as sun
		from employee_outlet a, outlets b
		where a.outlet_id = b.id
		and a.status =  '1'
		and a.employee_id = ?";
		return $init; 
	}

	public static function insertSalesRoute(){
		$init = " 
		insert into employee_recycle (employee_outlets_id, week, mon, tue, wed, thur, fri, sat, sun) values (?,?,?,?,?,?,?,?,?)";
		return $init; 
	}

	public static function countRecycleEntries(){
		$init = " 
		select count(id) as mcount from employee_recycle where employee_outlets_id = ? and week = ?";
		return $init; 
	}

	public static function updateRecycleEntries(){
		$init = " 
		update employee_recycle set mon = ?, tue = ?, wed = ?, thur = ?, fri = ?, sat = ?, sun = ? where employee_outlets_id = ? and week = ?";
		return $init; 
	}

	public static function authUsers() {
		$init = " 
		SELECT count(id) as counts FROM employees where username = ?";
		return $init; 
	}

	public static function regUsers(){
		$init = "
		insert into employees (first_name,middle_name,last_name,sex,phone_no,email,phone_fa_code,bike_fa_code,phone_imei,device_brands_id,
		customer_code,employee_code,depots_id,vehicle_id,division_id,region_id,area_id,company_id,syscategory_id,username,password,
		depots_waiver, imei_waiver,entry_date) 
		values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		return $init; 
	}

	public static function userLoginAuth() {
		$init = " 
		select id, count(id) as counts from employees where username = ? and password = ? group by id";
		return $init; 
	}

	public static function getSysCategor() {
		$init = " 
		select * from syscategory ";
		return $init; 
	}

	public static function getIndividualRegion() {
		$init = " 
		select id , name from regions where id = ? ";
		return $init; 
	}

	public static function getAllRegion() {
		$init = " 
		select id, name from regions ";
		return $init; 
	}

	public static function usersEditableInfo() {
		$init = " 
		select first_name, middle_name, last_name, sex, phone_no, email, phone_fa_code, bike_fa_code, phone_imei,
		device_brands_id, customer_code, employee_code, depots_id,vehicle_id, region_id, area_id, syscategory_id, username, password,depots_waiver,
		activate
		from employees where id = ?";
		return $init; 
	}

	public static function usersInfoUpdates() {
		$init = " 
		update employees set 
		first_name = ?, middle_name = ?, last_name = ?, sex = ?,  phone_no = ?, email = ?, 
		phone_fa_code = ?, bike_fa_code = ?, phone_imei = ?,
		device_brands_id = ?, customer_code = ?, employee_code = ?,
		depots_id = ?,vehicle_id = ?, region_id = ?, area_id = ?, syscategory_id = ?, password = ?, depots_waiver = ?, activate = ?
		where id = ?";
		return $init; 
	}



	public static function getAllIssue() {
		$init = "select id, name from issues order by name";
		return $init; 
	}

	public static function getAppendedIssues() {
		$init = "
		select b.name
		from employee_issues a, issues b
		where a.employee_id = ?
		and a.issues_id = b.id
		and a.entry_date = ?
		order by a.id desc limit 1";
		return $init; 
	}

	public static function getAppendedIssuesId(){
		$init = "
		select a.issues_id
		from employee_issues a, issues b
		where a.employee_id = ? 
		and a.issues_id = b.id
		order by a.id desc limit 1";
		return $init; 
	}

	public static function insertIntoEmpIssues() {
		$init = "
		INSERT INTO employee_issues(employee_id, issues_id, entry_date,entry_time) values (?,?,?,?)";
		return $init; 
	}

	public static function getAllActionPlan() {
		$init = "SELECT id, name from action_plan WHERE status =  0 order by name";
		return $init; 
	}

	public static function insertIntoActionPlan() {
		$init = "
		insert into employee_action_plan(employee_id,issues_id, action_plan_id, entry_date, entry_time)
		values(?,?,?,?,?)";
		return $init; 
	}

	public static function getActioPlanByName() {
		$init = "
		select c.name
		from employee_issues a, employee_action_plan b, action_plan c
		where a.issues_id = b.issues_id 
		and c.id = b.action_plan_id
		and b.employee_id = ?
		and b.entry_date = ?
		order by b.id desc limit 1";
		return $init; 
	}

	public static function getActioPlanByID() {
		$init = "
		select c.id
		from employee_issues a, employee_action_plan b, action_plan c
		where a.issues_id = b.issues_id 
		and c.id = b.action_plan_id
		and b.employee_id = ?
		order by b.id desc limit 1";
		return $init; 
	}

	public static function getRepCustomers() {
		$init = "
		select c.id, c.id as outlet_id, c.id as urno, c.outletname
		from employee_outlet_visit_cycle a, employee_route b, outlets c
		where a.route_id = b.route_id
		and c.id::varchar = a.urno::varchar
		and b.employee_id = ?
		and lower(a.visit_days) = lower(?)
		";
		return $init; 
	}
	/*public static function getRepCustomers() {
		$init = "
		select b.id, a.outlet_id, b.urno, b.outletname
		from employee_outlet a, outlets b 
		where a.outlet_id = b.id  
		and a.status =  '1'
		and a.employee_id = ?";
		return $init; 
	}*/

	public static function getAllOutletCards() {
		$init = "
		select a.id as auto, b.id, trim(LEADING '0' FROM a.urno) as urno, f.name as syscat, c.name as classname, d.name as language, e.name as outlettype,
		a.outletname, a.outletaddress, a.contactname, a.contactphone, a.latitude, a.longitude, a.entry_date,  a.entry_date_time, b.syscategory_id
		from employee_outletcard a, employees b, outlet_class c, languages d, outlet_type e, syscategory f
		where cast(a.employee_id as integer) = b.id
		and cast(a.outletclassid as integer) = c.id
		and cast(a.outletlanguageid as integer) = d.id
		and cast(a.outlettypeid as integer) = e.id
		and b.syscategory_id = f.id
		and (trim(LEADING '0' FROM a.urno)  =  ? or trim(LEADING '0' FROM a.urno)  =  ?) order by a.entry_date_time desc";
		return $init; 
	}

	public static function fetchBasket() {
		$init = "
		select urno, outletclassid, outletlanguageid,outlettypeid,outletname,outletaddress,contactname,contactphone,
		latitude,longitude,outlet_pic     
		from employee_outletcard where id = ?";
		return $init; 
	}

	public static function getAllTodayOutlet() {
		$init = "
		select c.id as urno, c.outletname, a.visit_sequence::integer-1 as seq
		from employee_outlet_visit_cycle a, employee_route b, outlets c
		where a.route_id = b.route_id
		and a.urno::varchar = c.id::varchar
		and b.employee_id = ?
		and lower(a.visit_days) = lower(?)
		order by a.visit_sequence::integer asc";
		return $init; 
	}

	public static function updateFetchBasket() {
		$init = "
		update outlets set outletclassid = ?, outletlanguageid = ?, outlettypeid = ?,   
		outletname = ?, outletaddress = ?, contactname = ?, contactphone = ?, 
		latitude = ?, longitude = ?, outlet_pic = ?
		where (id = ?  or urno = ?)";
		return $init; 
	}

	public static function FetchCompetition() {
		$init = "
		select a.id, c.name as region, d.name as depots, a.productname, a.product_code
		from employee_competition a, regions c, depots d
		where a.region_id = c.id
		and a.depot_id = d.id
		and a.region_id =  ?
		";
		return $init; 
	}

	public static function createCompetitionBrands() {
		$init = "
		insert into employee_competition (productname,product_code, region_id, depot_id)
		values(?,?,?,?) RETURNING id";
		return $init; 
	}

	public static function FetchInsertedCompetition() {
		$init = "
		select a.id, c.name as region, d.name as depots, a.productname, a.product_code
		from employee_competition a, regions c, depots d
		where a.region_id = c.id
		and a.depot_id = d.id
		and  a.id = ?
		";
		return $init; 
	}

	public static function RemoveCompetition() {
		$init = "
		delete from employee_competition where id = ?
		";
		return $init; 
	}

	public static function routeManager(){
		$init = " 
		select  a.id, a.employee_id, a.route_id, a.depot_id, b.name as depotname,
		(select concat('(',employee_code,') ', first_name,' ',last_name) from employees where id = a.employee_id ) as repname
		from employee_route  a, depots b
		where region_id  = ?
		and b.id = a.depot_id
		order by a.depot_id, a.route_id";
		return $init; 
	}

	public static function routeManagerAdmin() {
		$init = " 
		select  a.id, a.employee_id, a.route_id, a.depot_id, b.name as depotname,
		(select concat('(',employee_code,') ', first_name,' ',last_name) from employees where id = a.employee_id ) as repname
		from employee_route  a, depots b
		where b.id = a.depot_id
		order by a.depot_id, a.route_id";
		return $init; 
	}

	public static function routeManagerUpdate() {
		$init = " 
		Update employee_route a set employee_id = (select id::integer from employees where employee_code = ? limit 1) 
		where a.id = ?";
		return $init; 
	}

	public static function routeAndEdocdeChecker() {
		$init = " 
		select concat('(',employee_code,') ', first_name,' ',last_name) as nam from employees where employee_code = ?";
		return $init; 
	}

	public static function routeAndEdocdeCheckerCount() {
		$init = " 
		select count(id) as nam from employees where employee_code = ?";
		return $init; 
	}

	public static function sysMonitorListForSalesMonitor(){
		$init = " 
		SELECT  a.id, a.employee_code as ecode, CONCAT(a.first_name,' ',a.middle_name,' ',a.last_name) as fullname,
		(select name from depots where  id = a.depots_id) as depots, 
		(select name from regions where  id = a.region_id) as regions,
		(select planned_outlet from daily_planned_outlets where employee_id = a.id and entry_date = ?) as total_outlets
		FROM employees a		
		WHERE a.region_id = ? AND syscategory_id in (2) order by a.first_name";
		return $init; 
	}

	public static function sysMonitorListForSalesMonitorAdmin(){
		$init = " 
		SELECT  a.id, a.employee_code as ecode, CONCAT(a.first_name,' ',a.middle_name,' ',a.last_name) as fullname,
		(select name from depots where  id = a.depots_id) as depots, 
		(select name from regions where  id = a.region_id) as regions,
		(select planned_outlet from daily_planned_outlets where employee_id = a.id and entry_date = ?) as total_outlets
		FROM employees a		
		WHERE  syscategory_id in (2) order by a.first_name";
		return $init; 
	}

	public static function sysSupervisorSalesMonitor(){
		$init = " 
		SELECT  a.id, a.employee_code as ecode, CONCAT(a.first_name,' ',a.middle_name,' ',a.last_name) as fullname,
		(select name from depots where  id = a.depots_id) as depots, 
		(select name from regions where  id = a.region_id) as regions,
		(select name from areas where  id = a.area_id) as areas, 
		(select name from employee_status where id = a.employee_status_id) as issues, 
		(select name from employee_action_taken where id = a.employee_action_taken_id) as actions,
		(select name from syscategory where id = a.syscategory_id) as syscat,
		(select count(id) from employee_outlet where employee_id = a.id) as total_outlets
		FROM employees a		
		WHERE a.region_id = ? AND syscategory_id = 2 AND depots_id = ? order by a.first_name";
		return $init; 
	}

	public static function sysSupervisorSalesCustomers() {
		$init = "select a.id, b.outletname, a.employee_id, b.id as outlet_id, a.sequenceno, b.cust_token,
		 b.defaulttoken, b.contactphone
		from sales_route_plan a,  outlets b
		where a.outlet_id = b.id
		and a.employee_id  = ? and a.visit_date = ?
		ORDER BY cast(a.sequenceno as int) asc";
		return $init; 
	}

	public static function repOutletSales() {
		$init = "select product_name, product_code, qty,amount, inventory, pricing, soq, transtime  
		from cache_employee_sales_entry 
		where employee_id = ? and outlet_id = ? and entry_date = ?";
		return $init; 
	}

	public static function repOutletSalesUpdates() {
		$init = "update employee_route set employee_id = 0 where id = ?";
		return $init; 
	}
	
	public static function DataIntegrity() {
		$init = "select a.product_name as proname, a.product_code as sku, a.qty as dy,(Select sum(qty) from cache_employee_sales_entry 
		where lower(product_code) = lower(a.product_code) and entry_date = ? and employee_id = b.id) as mt
		from products a, employees b
		where lower(a.customerno) = lower(b.customer_code)
		and b.id = ?";
		return $init; 
	}

	public static function UpdateCustomersPhoneNumber(){
		$init  = "select concat(b.first_name,' ',b.last_name) as repname, 
		a.id, a.contactphone, d.name as region, c.name as depot, e.id as urno, e.outletname
		from phonenumbercard a, employees b, depots c, regions d, outlets e
		where a.employee_id::varchar = b.id::varchar
		and b.region_id = ?
		and b.region_id = d.id
		and b.depots_id = c.id
		and e.id::varchar = a.outlet_id::varchar
		and times <> '00:00:00'";
		return $init ;
	}

	public static function UpdateCustomersPhoneNumberAdmin(){
		$init  = "select concat(b.first_name,' ',b.last_name) as repname, 
		a.id, a.contactphone, d.name as region, c.name as depot, e.id as urno, e.outletname
		from phonenumbercard a, employees b, depots c, regions d, outlets e
		where a.employee_id::varchar = b.id::varchar
		and b.region_id = d.id
		and b.depots_id = c.id
		and e.id::varchar = a.outlet_id::varchar
		and times <> '00:00:00'";
		return $init ;
	}

	public static function getUpdateMobileDetails(){
		$init  = "select outlet_id, contactphone from phonenumbercard where id = ?";
		return $init ;
	}

	public static function updateMobileDetails(){
		$init  = "update outlets set contactphone = ? where id = ?";
		return $init ;
	}

	public static function updateMobileNumber(){
		$init  = "update phonenumbercard set times = '00:00:00' where id = ?";
		return $init ;
	}

	public static function getTokenToValidateSales(){
		$init  = "select cust_token from outlets where id = ?";
		return $init ;
	}



	
}
	
?>