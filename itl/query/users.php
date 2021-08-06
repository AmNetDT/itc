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
		select a.id, concat(a.name,'-',b.name,'-',c.name, d.name) as name
from depot a, region b, state c, lga d
where a.region_id = b.id
and a.state_id = c.id
and a.lga_id = d.id
and a.region_id = ?";
		return $init; 
	}

	public static function getDepotAdmin(){
		$init = " 
		select a.id, concat(a.name,'-',b.name,'-',c.name, d.name) as name
from depot a, region b, state c, lga d
where a.region_id = b.id
and a.state_id = c.id
and a.lga_id = d.id";
		return $init; 
	}

	public static function getDepotSupervisor(){
		$init = " 
		select a.id, concat(a.name,'-',b.name,'-',c.name, d.name) as name
from depot a, region b, state c, lga d
where a.region_id = b.id
and a.state_id = c.id
and a.lga_id = d.id
and a.id = ?
		";
		return $init; 
	}
	
	public static function getVehicle(){
		$init = "select id, name  from distribution_channel";
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
		$init = "select a.id, b.name as na, 'mobile' as ch 
		from usersmodules a, modules b
		where a.user_id =  ?
		and a.module_id = b.id";
		return $init; 
	}

	public static function getAllAppModules()
	{
		$init = "select id, name from modules";
		return $init;
	}
	
	public static function insertIntoUserModule(){
		$init = "insert into usersmodules (user_id, module_id, entry_date, entry_time) VALUES (?, ?, ?, ?)";
		return $init; 
	}

	public static function validateModule()
	{
		$init = "select count(id)  as counts from usersmodules where user_id = ? and module_id = ?";
		return $init;
	}
	
	public static function getAllAppChannel(){
		$init = "select id, name from channels where id = 2";
		return $init; 
	}
	
	//this is the first correct one
	public static function UserCategotyAndPriv(){
		$init = "select fullname as name, 
system_category_id as syscategory_id, region_id, 
depot_id as depots_id
from users
where id = ?";
		return $init; 
	}

	

	public static function sysMonitorList(){
		$init = " 
		select a.id, a.staffcode as ecode, a.fullname, b.name as depots, 
		c.name as areas, a.users_status as issues, d.name as syscat,
		e.name as regions, f.name as state, g.name as coveragelga, a.issues as issues, 
		a.actiontaken as actions, a.actionplan_id, a.issues_id, totaloutlets as total_outlets
		from users a, depot b, area c,  system_category d, region e, state f,  lga g 
		where a.depot_id = b.id
		and a.area_id = c.id
		and a.system_category_id = d.id
		and a.region_id = e.id
		and a.state_id = f.id
		and a.lga_id = g.id
		and a.system_category_id in (2,4, 6)
		and a.region_id = ?
		order by a.fullname";
		return $init; 
	}

	//AND a.activate = 'YES'

	public static function sysAdminList() {
		$init = " 
		
		select a.id, a.staffcode as ecode, a.fullname, b.name as depots, 
		c.name as areas, a.users_status as issues, d.name as syscat,
		e.name as regions, f.name as state, g.name as lga, a.issues as issues, 
		a.actiontaken as actions, a.actionplan_id, a.issues_id, totaloutlets as total_outlets
		from users a, depot b, area c,  system_category d, region e, state f,  lga g 
		where a.depot_id = b.id
		and a.area_id = c.id
		and a.system_category_id = d.id
		and a.region_id = e.id
		and a.state_id = f.id
		and a.lga_id = g.id
		and a.system_category_id in (1,2,3,4,5,6)
		order by a.fullname";
		return $init; 
	}

	public static function sysSupervisorList(){
		$init = " 
		select a.id, a.staffcode as ecode, a.fullname, b.name as depots, 
		c.name as areas, a.users_status as issues, d.name as syscat,
		e.name as regions, f.name as state, g.name as coveragelga, a.issues as issues, 
		a.actiontaken as actions, a.actionplan_id, a.issues_id, totaloutlets as total_outlets
		from users a, depot b, area c,  system_category d, region e, state f,  lga g 
		where a.depot_id = b.id
		and a.area_id = c.id
		and a.system_category_id = d.id
		and a.region_id = e.id
		and a.state_id = f.id
		and a.lga_id = g.id
		and  a.region_id = ? AND a.system_category_id = 2 AND a.depot_id = ?
		order by a.fullname";
		return $init; 
	}
	
	public static function userIssues(){
		$init = " 
		 update users set issues = ?  WHERE id = ?";
		 return $init; 
	}

	public static function userStatus(){
		$init = " 
		 update users set actions= ?  WHERE id = ?";
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
		SELECT count(id) as counts FROM users where username = ?";
		return $init; 
	}

	public static function regUsers(){
		$init = "
		INSERT INTO users(
	fullname, sex, phoneno, email, username, password, phone_fa_code, bike_fa_code, phone_imei, staffcode, 
	region_id, state_id, lga_id, area_id, distribution_channel_id, depot_id, company_id, users_status, 
	system_category_id, device_brand_id, depot_waiver, entry_date)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		return $init; 
	}

	public static function userLoginAuth() {
		$init = " 
		select id, count(id) as counts from users where username = ? and password = ? 
		and system_category_id in(1, 3, 4)
		group by id";
		return $init; 
	}

	public static function getSysCategor() {
		$init = " 
		select * from system_category ";
		return $init; 
	}

	public static function getIndividualRegion() {
		$init = " 
		select id , name from region where id = ? ";
		return $init; 
	}

	public static function getAllRegion() {
		$init = " 
		select id, name from region ";
		return $init; 
	}

	public static function getState()
	{
		$init = " 
		select id, name from state where regions_id = ? ";
		return $init;
	}

	public static function getLga()
	{
		$init = " 
		select id, name from lga where state_id = ? ";
		return $init;
	}

	public static function getArea()
	{
		$init = " 
		select id, name from area where lga_id = ? ";
		return $init;
	}

	public static function usersEditableInfo() {
		$init = " 
		select fullname, sex, phoneno as phone_no, email, phone_fa_code, bike_fa_code, phone_imei,
		device_brand_id as device_brands_id, '' as customer_code, staffcode as employee_code, 
		depot_id as depots_id,distribution_channel_id as vehicle_id, region_id, area_id, 
		system_category_id as syscategory_id, username, password, depot_waiver as depots_waiver, 
		users_status as activate, state_id, lga_id
		from users where id = ?";
		return $init; 
	}


	public static function usersInfoUpdates() {
		$init = " UPDATE users SET fullname = ?, staffcode=?, sex=?,
		phoneno=?, email=?, region_id=?, state_id=?, lga_id=?, area_id=?, depot_id=?, distribution_channel_id=?,  
		company_id=?, phone_fa_code=?, bike_fa_code=?, phone_imei=?, device_brand_id=?, system_category_id=?, 
		username=?, password=?, depot_waiver=?, users_status=?
		WHERE id = ?";
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
		INSERT INTO users_issues ( users_id, issue_id, entry_date, entry_time) values (?,?,?,?)";
		return $init; 
	}

	public static function updateIssuesIssues()
	{
		$init = "
		UPDATE users set issues_id = ?, issues = (select name from issues where id = ?) where id = ?";
		return $init;
	}
	

	public static function getAllActionPlan() {
		$init = "SELECT id, name from action_plan WHERE status =  0 order by name";
		return $init; 
	}

	public static function insertIntoActionPlan() {
		$init = "
		insert into users_action_taken (users_issues_id, action_plan_id, entry_date, entry_time) values(?,?,?,?)";
		return $init; 
	}

	public static function getUserIssuesId()
	{
		$init = "
		select id from users_issues where users_id = ? order by id desc  limit 1 ";
		return $init;
	}

	public static function updateIntoActionPlan()
	{
		$init =
		"
		UPDATE users set actionplan_id = ?, actiontaken = (select name from action_plan where id = ?) where id = ?";
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
from user_outlet_visit_cycle a, user_route b, outlets c
where a.route_id = b.route_id
and c.id::varchar = a.urno::varchar
and b.users_id = ?
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
		a.outletname, a.outletaddress, a.contactname, a.contactphone, a.latitude, a.longitude, a.entry_date,  a.entry_date_time, b.system_category_id
		from user_outletcard a, users b, outlet_class c, languages d, outlet_type e, system_category f
		where cast(a.user_id as integer) = b.id
		and cast(a.outletclassid as integer) = c.id
		and cast(a.outletlanguageid as integer) = d.id
		and cast(a.outlettypeid as integer) = e.id
		and b.system_category_id = f.id
		and (trim(LEADING '0' FROM a.urno)  = ? or trim(LEADING '0' FROM a.urno)  = ?) order by a.entry_date_time desc
		";
		return $init; 
	}

	public static function fetchBasket() {
		$init = "
		select urno, outletclassid, outletlanguageid,outlettypeid,outletname,outletaddress,contactname,contactphone,
		latitude,longitude,outlet_pic     
		from user_outletcard where id = ?";
		return $init; 
	}

	public static function getAllTodayOutlet() {
		$init = "
		select c.id as urno, c.outletname, a.visit_sequence::integer-1 as seq
		from user_outlet_visit_cycle a, user_route b, outlets c
		where a.route_id = b.route_id
		and a.urno::varchar = c.id::varchar
		and b.users_id = ?
		and lower(a.visit_days) = lower(?)
		order by a.visit_sequence::integer asc";
		return $init; 
	}

	public static function updateFetchBasket() {
		$init = "
		update outlets set   outletname = ?
		where (id = ?)";
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
		select  a.id, a.users_id, a.route_id, a.depot_id, 
b.name as depotname,(select concat('(',staffcode,') ', fullname) from users where id = a.users_id ) as repname
from user_route  a, depot b where a.region_id  = ? and b.id = a.depot_id 
order by a.depot_id, a.route_id";
		return $init; 
	}

	public static function routeManagerAdmin() {
		$init = " 
		select  a.id, a.users_id, a.route_id, a.depot_id, b.name as depotname,
		(select concat('(',staffcode,') ', fullname) from users where id = a.users_id ) as repname
		from user_route  a, depot b
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
		$init = "update user_route set employee_id = 0 where id = ?";
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
		$init  = "select fullname as repname, 
		a.id, a.contactphone, d.name as region, c.name as depot, e.id as urno, e.outletname
		from phonenumbercard a, users b, depot c, region d, outlets e
		where a.user_id::varchar = b.id::varchar
		and b.region_id = ?
		and b.region_id = d.id
		and b.depot_id = c.id
		and e.id::varchar = a.outlet_id::varchar
		and times <> '00:00:00'";
		return $init ;
	}

	public static function UpdateCustomersPhoneNumberAdmin(){
		$init  = "select fullname as repname, 
		a.id, a.contactphone, d.name as region, c.name as depot, e.id as urno, e.outletname
		from phonenumbercard a, users b, depot c, region d, outlets e
		where a.user_id::varchar = b.id::varchar
		and b.region_id = d.id
		and b.depot_id = c.id
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

	public static function fetchAllDefaultToken() {
		$init  = "select  fullname as repname, 
		a.id, d.name as region, c.name as depot, e.id as urno, e.outletname, a.time, a.curlocation,
		concat(e.latitude,':',e.longitude) as outletlocation, e.contactphone, b.id as employee_id
		from tokenrequest a, users b, depot c, region d, outlets e
		where a.user_id::varchar = b.id::varchar
		and b.region_id = ?
		and b.region_id = d.id
		and b.depot_id = c.id
		and a.urno::varchar = e.id::varchar
		and a.entry_date =  ?";
		return $init ;
	}

	public static function fetchAllDefaultTokenByAdmin() {
		$init  = "select concat(b.first_name,' ',b.last_name) as repname, 
		a.id, d.name as region, c.name as depot, e.id as urno, e.outletname, a.time, a.curlocation,
		concat(e.latitude,':',e.longitude) as outletlocation, e.contactphone, b.id as employee_id
		from tokenrequest a, employees b, depots c, regions d, outlets e
		where a.employee_id::varchar = b.id::varchar
		and b.region_id = d.id
		and b.depots_id = c.id
		and a.urno::varchar = e.id::varchar
		and a.entry_date =  ?";
		return $init ;
	}

	public static function sentTokenCount() {
		$init  = "select count(id) as total from tokenrequest where region_id = ? and entry_date = ?";
		return $init ;
	}

	public static function sentTokenCountAdmin() {
		$init  = "select count(id) as total from tokenrequest where entry_date = ?";
		return $init ;
	}


	public static function sysMonitorListForSalesMonitors(){
		$init = " 
		SELECT  a.id, a.employee_code as ecode, CONCAT(a.first_name,' ',a.middle_name,' ',a.last_name) as fullname,
		(select name from depots where  id = a.depots_id) as depots, 
		(select name from regions where  id = a.region_id) as regions
		FROM employees a		
		WHERE a.region_id = ? AND syscategory_id in (4) order by a.first_name";
		return $init; 
	}

	public static function sysMonitorListForSalesMonitorAdmins(){
		$init = " 
		SELECT  a.id, a.employee_code as ecode, CONCAT(a.first_name,' ',a.middle_name,' ',a.last_name) as fullname,
		(select name from depots where  id = a.depots_id) as depots, 
		(select name from regions where  id = a.region_id) as regions
		FROM employees a		
		WHERE  syscategory_id in (4) order by a.first_name";
		return $init; 
	}

	public static function allTmSalesReps(){
		$init = " 
		select id as employeeid, concat(first_name,' ',last_name) as name, employee_code 
		from employees 
		where depots_id = (select depots_id from employees  where id = ?) 
		and syscategory_id = 2
		";
		return $init; 
	}

	public static function allTmSalesRepsOutlets(){
		$init = " 
		select b.id as urno, b.outletname , b.tmtoken, b.contactphone
		from sales_route_plan a, outlets b 
		where a.outlet_id = b.id
		and a.employee_id = ?
		and a.visit_date = ?";
		return $init; 
	}

}
	
?>