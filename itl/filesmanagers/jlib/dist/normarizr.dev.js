"use strict";

// JavaScript Document
var ajaxLoading = false;
var ajaxLoadingIssue = false;
var ajaxLoadingUsers = false;
var ajaxLoadingUsersEdit = false;
var ajaxLoadingModules = false;
var ajaxLoadingOutletUpdatePermission = false;
var ajaxLoadingCustomersCards = false;
var ajaxLoadingOutletCards = false;
var ajaxLoadingCompitition = false;
$(document).ready(function () {
  $(document).on('click', '.btn_permit_01', function () {
    //let ct = $('.permit_all_checks:checked').size();
    var counts = $(".counts_permission").val(); //let def = counts-ct;
    //if(def > 0){

    outletUpdatePermission(counts); //}
  });
  $(document).on('click', '.btn_permit_02', function () {
    //let ct = $('.permit_all_checks:checked').size();
    var counts = $(".counts_permission").val(); //let def = counts-ct;
    //if(def > 0){

    outletUpdatePermission(counts); //}
  });

  var outletUpdatePermission = function outletUpdatePermission(count) {
    $("#loader_httpFeed").show();
    var mCount = Number(count) + 1;
    var usesArray = [];
    var i = 1;

    for (i; i < mCount; i++) {
      var monVals = void 0;

      if ($(".permitOutlet" + i).is(':checked')) {
        monVals = $(".permitOutlet" + i).val() + '~true';
      } else {
        monVals = $(".permitOutlet" + i).val() + '~false';
      }

      usesArray.push(monVals);
    }

    var req = {
      outletid: usesArray
    };
    $.ajax({
      type: "POST",
      url: "filesmanagers/outlet_permission/salesserver.php",
      data: req,
      dataType: "json",
      cache: false,
      success: function success(resp) {
        $("#loader_httpFeed").hide();
        dalert.alert(resp.msg);
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
  };

  $(document).on('click', '.chkll_permits', function () {
    if ($(this).is(":checked")) {
      $(".permit_all_checks").prop("checked", true);
    } else if ($(this).is(":not(:checked)")) {
      $(".permit_all_checks").prop("checked", false);
    }
  });
  $(document).on('click', '.btn_outlet_update_permission', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var username = $(this).attr("lang");

    if (!ajaxLoadingOutletUpdatePermission) {
      ajaxLoadingOutletUpdatePermission = true;
      var req = {
        id: id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/outlet_permission/lightbox_outlet_permission.php",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Outlet Update Permission-> ".concat(username.toUpperCase()),
            "content": msg
          });
          ajaxLoadingOutletUpdatePermission = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.users_app_modules_dev', function () {
    $("#loader_httpFeed").show();
    var username = $(this).attr("lang");
    var id = $(this).attr("id");

    if (!ajaxLoadingModules) {
      ajaxLoadingModules = true;
      var req = {
        employee_id: id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/user_modules/module_light_box",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Users App Module -> ".concat(username.toUpperCase()),
            "content": msg
          });
          ajaxLoadingModules = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.sys_edit_users', function () {
    $("#loader_httpFeed").show();
    var username = $(this).attr("lang");
    var id = $(this).attr("id");

    if (!ajaxLoadingUsersEdit) {
      ajaxLoadingUsersEdit = true;
      var req = {
        employee_id: id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/users/editusers",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Edit User Info -> ".concat(username.toUpperCase()),
            "content": msg
          });
          ajaxLoadingUsersEdit = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.sys_mapoutlet', function () {
    $("#loader_httpFeed").show();
    var fullname = $(this).attr("lang");
    var id = $(this).attr("id");
    var userid = $(this).attr("eng");

    if (!ajaxLoadingUsersEdit) {
      ajaxLoadingUsersEdit = true;
      var req = {
        id: id,
        userid: userid
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/mapoutlet/editusers",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Map Outlet -> ".concat(fullname.toUpperCase()),
            "content": msg
          });
          ajaxLoadingUsersEdit = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.sys_regts', function () {
    $("#loader_httpFeed").show();

    if (!ajaxLoadingUsers) {
      ajaxLoadingUsers = true;
      $.ajax({
        type: "POST",
        url: "filesmanagers/users/registerusers",
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Register Users",
            "content": msg
          });
          ajaxLoadingUsers = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  }); //$(".btn_issue").on('click',function() {

  $(document).on('click', '.btn_issue', function () {
    var switcher = $(".btn_status_action").children("option:selected").val();
    var username = $(this).attr("lang");
    var id = $(this).attr("id");
    var issues = $(this).attr("nig");
    var actions = $(this).attr("eng");
    $("#loader_httpFeed").show();

    if (!ajaxLoadingIssue) {
      ajaxLoadingIssue = true;
      var req = {
        id: id,
        issues: issues,
        actions: actions
      };

      if (switcher.trim() === "1") {
        $.ajax({
          type: "POST",
          url: "filesmanagers/userissues/lightbox_issue.php",
          data: req,
          cache: false,
          success: function success(msg) {
            $("#loader_httpFeed").hide();
            new top.PopLayer({
              "title": "User Issue-> " + username.toUpperCase(),
              "content": msg
            });
            ajaxLoadingIssue = false;
          },
          error: function error(xhr) {
            if (xhr.status == 404) {
              $("#loader_httpFeed").hide();
              dalert.alert("internet connection working");
            } else {
              $("#loader_httpFeed").hide();
              dalert.alert("internet is down");
            }
          }
        });
      } else if (switcher.trim() === "2") {
        $.ajax({
          type: "POST",
          url: "filesmanagers/userissues/lightbox_action.php",
          data: req,
          cache: false,
          success: function success(msg) {
            $("#loader_httpFeed").hide();
            new top.PopLayer({
              "title": "Action Plan-> " + username.toUpperCase(),
              "content": msg
            });
            ajaxLoadingIssue = false;
          },
          error: function error(xhr) {
            if (xhr.status == 404) {
              $("#loader_httpFeed").hide();
              dalert.alert("internet connection working");
            } else {
              $("#loader_httpFeed").hide();
              dalert.alert("internet is down");
            }
          }
        });
      }
    }
  });
  $(document).on('click', '.butoss_issues', function () {
    $("#loader_httpFeed").show();
    var mIssues = $("input[type='radio'].issue_vals:checked").val();
    var issuename = $("input[type='radio'].issue_vals:checked").attr("lang");
    var id = $(".mid").val();

    if (mIssues !== null && mIssues.trim() !== "undefined" && mIssues !== "") {
      var req = {
        id: id,
        mIssues: mIssues
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/userissues/update_ussue.php",
        data: req,
        cache: false,
        dataType: "json",
        success: function success(xhr) {
          dalert.alert("Issue Added Successfully");
          $('.rst' + id).attr("nig", mIssues);
          $('#myIssues' + id).html(issuename);
          $("#loader_httpFeed").hide();
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.butoss_actions', function () {
    //$("#butoss").on('click',function() {	
    $("#loader_httpFeed").show();
    var mActions = $("input[type='radio'].actions_vals:checked").val();
    var actionname = $("input[type='radio'].actions_vals:checked").attr("lang");
    var id = $(".mid").val();
    var sids = $(".sids").val();

    if (sids === "") {
      $("#loader_httpFeed").hide();
      dalert.alert("Action cant be taken without issue");
    } else {
      if (mActions !== null && mActions.trim() !== "undefined" && mActions !== "") {
        var req = {
          id: id,
          mActions: mActions,
          sids: sids
        };
        $.ajax({
          type: "POST",
          url: "filesmanagers/userissues/update_action_plan.php",
          data: req,
          cache: false,
          dataType: "json",
          success: function success(xhr) {
            dalert.alert("Action Taken Successfully");
            $('.rst' + id).attr("eng", mActions);
            $('#myaction' + id).html(actionname);
            $("#loader_httpFeed").hide();
          },
          error: function error(xhr) {
            if (xhr.status == 404) {
              $("#loader_httpFeed").hide();
              dalert.alert("internet connection working");
            } else {
              $("#loader_httpFeed").hide();
              dalert.alert("internet is down");
            }
          }
        });
      }
    }
  });
  $(document).on('click', '.btn_sales_route', function () {
    $("#loader_httpFeed").show();
    var weeks = $(".btn_weeks_sales_route_plan").children("option:selected").val();
    var days = $(".btn_days_sales_route_plan").children("option:selected").val();
    var id = $(this).attr("id");
    var username = $(this).attr("lang");

    if (weeks === "0") {
      $("#loader_httpFeed").hide();
      dalert.alert("Please select Weeks");
    } else {
      if (!ajaxLoading) {
        ajaxLoading = true;
        var req = {
          weeks: weeks,
          id: id
        };
        $.ajax({
          type: "POST",
          url: "filesmanagers/sales_route_plan/lightbox_sales_route.php",
          data: req,
          cache: false,
          success: function success(msg) {
            $("#loader_httpFeed").hide();
            new top.PopLayer({
              "title": "Sales Route Plan (Week ".concat(weeks, ") -> ").concat(username.toUpperCase()),
              "content": msg
            });
            ajaxLoading = false;
          },
          error: function error(xhr) {
            if (xhr.status == 404) {
              $("#loader_httpFeed").hide();
              dalert.alert("internet connection working");
            } else {
              $("#loader_httpFeed").hide();
              dalert.alert("internet is down");
            }
          }
        });
      }
    }
  });
  $(document).on('click', '.find_sales_route_y', function () {
    var counts = $(".counts").val();
    var eid = $(".employee_outlets").val();
    var weeks = $(".route_weeks_recycle").val();

    if (counts !== "0") {
      salesRouteCycle(counts, eid, weeks);
    }
  });
  $(document).on('click', '.find_sales_route_x', function () {
    var counts = $(".counts").val();
    var eid = $(".employee_outlets").val();
    var weeks = $(".route_weeks_recycle").val();

    if (counts !== "0") {
      salesRouteCycle(counts, eid, weeks);
    }
  });

  var salesRouteCycle = function salesRouteCycle(count, eid, weeks) {
    var mCount = Number(count) + 1;
    var mWeek = weeks;
    var monArray = [];
    var tueArray = [];
    var wedArray = [];
    var thurArray = [];
    var friArray = [];
    var satArray = [];
    var sunArray = [];
    var recycleidArray = [];
    var i = 1;
    $("#loader_httpFeed").show();

    for (i; i < mCount; i++) {
      var monHolder = "0";
      var monVals = $(".mon" + i + ":checked").val();
      var tueHolder = "0";
      var tueVals = $(".tue" + i + ":checked").val();
      var wedHolder = "0";
      var wedVals = $(".wed" + i + ":checked").val();
      var thurHolder = "0";
      var thurVals = $(".thur" + i + ":checked").val();
      var friHolder = "0";
      var friVals = $(".fri" + i + ":checked").val();
      var satHolder = "0";
      var satVals = $(".sat" + i + ":checked").val();
      var sunHolder = "0";
      var sunVals = $(".sun" + i + ":checked").val();
      var rec = $(".rg_q" + i).val();

      if (monVals == "2") {
        monHolder = monVals;
      }

      if (tueVals == "3") {
        tueHolder = tueVals;
      }

      if (wedVals == "4") {
        wedHolder = wedVals;
      }

      if (thurVals == "5") {
        thurHolder = thurVals;
      }

      if (friVals == "6") {
        friHolder = friVals;
      }

      if (satVals == "7") {
        satHolder = satVals;
      }

      if (sunVals == "1") {
        sunHolder = sunVals;
      }

      monArray.push(monHolder);
      tueArray.push(tueHolder);
      wedArray.push(wedHolder);
      thurArray.push(thurHolder);
      friArray.push(friHolder);
      satArray.push(satHolder);
      sunArray.push(sunHolder);
      recycleidArray.push(rec);
    }

    var req = {
      monArray: monArray,
      tueArray: tueArray,
      wedArray: wedArray,
      thurArray: thurArray,
      friArray: friArray,
      satArray: satArray,
      sunArray: sunArray,
      recycleidArray: recycleidArray,
      mWeek: mWeek
    };
    $.ajax({
      type: "POST",
      url: "filesmanagers/sales_route_plan/salesserver.php",
      data: req,
      dataType: "json",
      cache: false,
      success: function success(resp) {
        dalert.alert(resp.msg);
        $("#loader_httpFeed").hide();
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
  };

  $(document).on('click', '.chkll', function () {
    if ($(this).is(":checked")) {
      $(".chdall_may").prop("checked", true);
    } else if ($(this).is(":not(:checked)")) {
      $(".chdall_may").prop("checked", false);
    }
  });
  $(document).on('click', '.btn_regis_01', function () {
    userRegistration();
    return false;
  });
  $(document).on('click', '.btn_regis_02', function () {
    $("#loader_httpFeed").show();
    userRegistration();
    return false;
  });

  var userRegistration = function userRegistration() {
    if ($(".f_name").val() === "") {
      dalert.alert("Please enter first name");
    } else if ($(".l_name").val() === "") {
      dalert.alert("Please enter last name");
    } else if ($(".i_mei").val() === "") {
      dalert.alert("Please enter Device imei");
    } else if ($(".cust_codes").val() === "") {
      dalert.alert("Please enter Customer Code");
    } else if ($(".e_codes").val() === "") {
      dalert.alert("Please enter ED Code");
    } else if ($(".u_i_users").val() === "") {
      dalert.alert("Please enter username");
    } else if ($(".u_i_pass").val() === "") {
      dalert.alert("Please enter password");
    } else {
      if ($(".insert_hidden_i").val() === "1") {
        userProcessReg();
      } else {
        editProcessReg();
      }
    }
  };

  var editProcessReg = function editProcessReg() {
    $("#loader_httpFeed").show();
    $.ajax({
      type: "POST",
      url: "filesmanagers/users/editserver.php",
      data: $('.reg_Serialise_i').serialize(),
      dataType: "json",
      success: function success(xhr) {
        if (xhr.status == "200") {
          dalert.alert(xhr.msg); //Reload that page again
        }
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
    $("#loader_httpFeed").hide();
    return false;
  };

  var userProcessReg = function userProcessReg() {
    $("#loader_httpFeed").show();
    $.ajax({
      type: "POST",
      url: "filesmanagers/users/registerserver.php",
      data: $('.reg_Serialise_i').serialize(),
      dataType: "json",
      success: function success(xhr) {
        if (xhr.status == "200") {
          dalert.alert(xhr.msg);
          $(".drclear").val("");
        } else {
          dalert.alert(xhr.msg);
        }
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
    $("#loader_httpFeed").hide();
    return false;
  };

  $(document).on('click', '.passSet', function () {
    var key = Math.floor(Math.random() * Math.pow(10, 4));
    $('.setPassword').val(key);
    return false;
  });
  $(document).on('click', '.userSet', function () {
    if ($(".f_name").val() === "" || $(".l_name").val() === "") {
      dalert.alert("Please enter first and last name to generate username");
    } else {
      var key = usernameGenerator();
      $('.setUsername').val(key);
    }

    return false;
  });

  var usernameGenerator = function usernameGenerator() {
    var prefix = "@mt3.com";
    var usersnames = $(".f_name").val();
    var append = $(".l_name").val();
    var small = usersnames + '.' + append.charAt(0) + prefix;
    return small.toLowerCase();
  };

  $(document).on('click', '#logB', function () {
    $("#loaders").show();
    var usrs = $(".login_userName").val();
    var paswd = $(".login_userPass").val();

    if (usrs === "") {
      $("#loaders").hide();
      dalert.alert('Please enter username');
    } else if (paswd === "") {
      $("#loaders").hide();
      dalert.alert('Please enter username');
    } else {
      var req = {
        users: usrs,
        pass: paswd
      };
      $("#loader_httpFeed").show();
      $.ajax({
        type: "POST",
        url: "filesmanagers/login/login",
        data: req,
        dataType: "json",
        cache: false,
        success: function success(msg) {
          if (msg.status == '400') {
            dalert.alert(msg.msg);
          } else {
            location.href = msg.url;
          }

          $("#loaders").hide();
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loaders").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }

    return false;
  });
  $(document).on('click', '.r_addmodules', function () {
    $("#loader_httpFeed").show();
    $.ajax({
      type: "POST",
      url: "filesmanagers/user_modules/addmodules.php",
      data: $('.add_modules_to_users').serialize(),
      dataType: "json",
      success: function success(msg) {
        if (msg.status == "400") {
          dalert.alert(msg.msg);
        } else {
          dalert.alert(msg.msg);
          $('.include_table').append(msg.data);
        }

        $("#loader_httpFeed").hide();
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
    return false;
  });
  $(document).on('click', '.r_inventory', function () {
    $("#loader_httpFeed").show();
    $.ajax({
      type: "POST",
      url: "filesmanagers/inventory/addinventory.php",
      data: $('.add_modules_to_users').serialize(),
      dataType: "json",
      success: function success(msg) {
        if (msg.status == "400") {
          dalert.alert(msg.msg);
        } else {
          dalert.alert(msg.msg);
          $('.include_table').prepend(msg.data);
        }

        $("#loader_httpFeed").hide();
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
    return false;
  });
  $(document).on('click', '._logout', function () {
    var req = {
      id: "0"
    };
    $("#loader_httpFeed").show();
    $.ajax({
      type: "POST",
      url: "filesmanagers/login/logout",
      data: req,
      dataType: "json",
      cache: false,
      success: function success(resData) {
        if (Number(resData.status) == 200) {
          location.href = 'index.php';
        }
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection not working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
    return false;
  });
  $(document).on('click', '.btn_customers_cards', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var username = $(this).attr("lang");

    if (!ajaxLoadingCustomersCards) {
      ajaxLoadingCustomersCards = true;
      var req = {
        id: id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/outlet_cards/lightbox_customer_card.php",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Customers Cards-> ".concat(username.toUpperCase()),
            "content": msg
          });
          ajaxLoadingCustomersCards = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.btn_cards_fetch', function () {
    $("#loader_httpFeed").show();
    var urno = $(this).attr("lang");

    if (!ajaxLoadingOutletCards) {
      ajaxLoadingOutletCards = true;
      var req = {
        urno: urno
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/outlet_cards/fetch.php",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#fetch_here").html(msg);
          $("#loader_httpFeed").hide();
          ajaxLoadingOutletCards = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.my_card_update', function () {
    var sn = $(this).attr("id");
    var custname = $(".custname" + sn).val();
    var conname = $(".conname" + sn).val();
    var addre = $(".addre" + sn).val();
    var clang = $(".clang" + sn).val();
    var cphone = $(".cphone" + sn).val();
    var clatlng = $(".clatlng" + sn).val();
    var ctype = $(".ctype" + sn).val();
    var cclass = $(".cclass" + sn).val();
    $('input[type=text].fname_apps').val(custname.toUpperCase());
    $('input[type=text].cname_app').val(conname.toUpperCase());
    $('input[type=text].cadres_app').val(addre.toUpperCase());
    $('input[type=text].clang_app').val(clang.toUpperCase());
    $('input[type=text].cphone_app').val(cphone.toUpperCase());
    $('input[type=text].clatlng').val(clatlng.toUpperCase());
    $('input[type=text].ctype_app').val(ctype.toUpperCase());
    $('input[type=text].class_app').val(cclass.toUpperCase());
    $('input[type=hidden].urno_autos').val(sn);
  });
  $(document).on('click', '.btn_regis_02_cards', function () {
    var req = {
      id: $('input[type=hidden].urno_autos').val()
    };

    if ($('input[type=hidden].urno_autos').val().trim() != '') {
      $("#loader_httpFeed").show();
      $.ajax({
        type: "POST",
        url: "filesmanagers/outlet_cards/salesserver.php",
        data: req,
        dataType: "json",
        cache: false,
        success: function success(xhr) {
          $("#loader_httpFeed").hide();

          if (xhr.status == '200') {
            dalert.alert("Successful");
            $('input[type=hidden]#e_empty').val('');
            $('input[type=text]#e_empty').val('');
          } else {
            dalert.alert("Error, Please check your internet and retry");
          }
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.r_addcompetition', function () {
    if ($("#competion_name").val() === "") {
      dalert.alert("please enter competition brand name");
    } else {
      $("#loader_httpFeed").show();
      $.ajax({
        type: "POST",
        url: "filesmanagers/competition/servers.php",
        data: $('.add_competition_to_users').serialize(),
        dataType: "json",
        success: function success(xhr) {
          var callBackObject = xhr.status;
          var data = xhr.data;
          $("#loader_httpFeed").hide();

          if (callBackObject == 200) {
            $('.include_table_data').append(xhr.data);
          } else {
            dalert.alert("please try again");
          }
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }

    return false;
  });
  $(document).on('click', '.dlete_mod_remove_comptition', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var dataString = "id=" + id;
    $.ajax({
      type: "POST",
      url: "filesmanagers/competition/server.php",
      data: dataString,
      dataType: "json",
      success: function success(xhr) {
        var callBackObject = xhr.status;
        $('.clickModuleCompition' + id).remove();
        $("#loader_httpFeed").hide();
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
    return false;
  });
  $(document).on('click', '.route_regis_00023', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var ed = $('.et_t_b_m' + id).val();

    if (ed.trim() == '') {
      $("#loader_httpFeed").hide();
      dalert.alert("field can not eb empty");
    } else {
      assignRouteToUsers(id, ed);
      return false;
    }
  });

  var assignRouteToUsers = function assignRouteToUsers(id, ed) {
    var res = {
      id: id,
      edcode: ed
    };
    $.ajax({
      type: "POST",
      url: "filesmanagers/sales_route_plan/salesserver.php",
      data: res,
      dataType: "json",
      success: function success(xhr) {
        if (xhr.status === 200) {
          $('.r_m_r_oute_mappers' + id).empty();
          $('.r_m_r_oute_mappers' + id).append(xhr.name.toUpperCase());
          dalert.alert(xhr.msg);
          $("#loader_httpFeed").hide();
        } else {
          dalert.alert(xhr.msg);
          $("#loader_httpFeed").hide();
        }
      },
      error: function error(xhr) {
        if (xhr.status.trim() == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
  };

  $(document).on('click', '.btn_customers_cards_cust_op', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var username = $(this).attr("lang");

    if (!ajaxLoadingCustomersCards) {
      ajaxLoadingCustomersCards = true;
      var req = {
        id: id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/salesmonitor/lightbox_customer_card.php",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Live Sales Monitor-> ".concat(username.toUpperCase()),
            "content": msg
          });
          ajaxLoadingCustomersCards = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.btn_cards_fetch_controllers', function () {
    $("#loader_httpFeed").show();
    var outlet_id = $(this).attr("eng");
    var employee_id = $(this).attr("lang");

    if (!ajaxLoadingOutletCards) {
      ajaxLoadingOutletCards = true;
      var req = {
        outlet_id: outlet_id,
        employee_id: employee_id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/salesmonitor/fetch.php",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#fetch_here").html(msg);
          $("#loader_httpFeed").hide();
          ajaxLoadingOutletCards = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.route_regis_00023_78', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var res = {
      id: id
    };
    $.ajax({
      type: "POST",
      url: "filesmanagers/sales_route_plan/salesservers.php",
      data: res,
      dataType: "json",
      success: function success(xhr) {
        if (xhr.status === 200) {
          $('.r_m_r_oute_mappers' + id).empty();
          $('.r_m_r_oute_mappers' + id).append('');
          dalert.alert('Successfully UnAssigned');
          $("#loader_httpFeed").hide();
        } else {
          $('.r_m_r_oute_mappers' + id).empty();
          dalert.alert('Successfully UnAssigned');
          $("#loader_httpFeed").hide();
        }
      },
      error: function error(xhr) {
        if (xhr.status.trim() == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
  });
  $(document).on('click', '.btn_customers_cards_cust_op_tokens', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var username = $(this).attr("lang");

    if (!ajaxLoadingCustomersCards) {
      ajaxLoadingCustomersCards = true;
      var req = {
        id: id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/tokenmanager/token_manager_light_box.php",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Token Manager-> ".concat(username.toUpperCase()),
            "content": msg
          });
          ajaxLoadingCustomersCards = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.btn_customers_cards_cust_op_integrity', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var username = $(this).attr("lang");

    if (!ajaxLoadingCustomersCards) {
      ajaxLoadingCustomersCards = true;
      var req = {
        id: id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/integrity/integrity_manager_light_box.php",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "Daily Basket-> ".concat(username.toUpperCase()),
            "content": msg
          });
          ajaxLoadingCustomersCards = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.route_regis_00023_token_update', function () {
    $("#loader_httpFeed").show();
    var getOutletsId = $(this).attr("id");
    var getPhoneNo = $('.et_t_b_m_v_m' + getOutletsId).val();

    if (getPhoneNo.length !== 11) {
      $("#loader_httpFeed").hide();
      dalert.alert("Incorrect Phone Numebr");
    } else {
      var req = {
        urno: getOutletsId,
        phoneno: getPhoneNo
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/tokenmanager/update_token.php",
        data: req,
        cache: false,
        dataType: "json",
        success: function success(xhr) {
          if (xhr.status == 200) {
            $("#loader_httpFeed").hide();
            dalert.alert("Successfully Update with " + getPhoneNo);
          }
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.route_regis_00023_send_token', function () {
    $("#loader_httpFeed").show();
    var getOutletsId = $(this).attr("id");
    var req = {
      urno: getOutletsId
    };
    $.ajax({
      type: "POST",
      url: "filesmanagers/tokenmanager/sendsms.php",
      data: req,
      cache: false,
      dataType: "json",
      success: function success(xhr) {
        if (xhr.status == 200) {
          $("#loader_httpFeed").hide();
          dalert.alert("Token Successfully Send ");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("Token not Successfully Send ");
        }
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
  });
  $(document).on('click', '.sys_edit_daily', function () {
    $("#loader_httpFeed").show();
    var username = $(this).attr("lang");
    var employeeid = $(this).attr("id");
    var getDays = $('.outletdays').val();

    if (!ajaxLoadingUsersEdit) {
      ajaxLoadingUsersEdit = true;
      var req = {
        employee_id: employeeid,
        myTodayOutlet: getDays
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/daily_outlet_manager/daily_outlets",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#loader_httpFeed").hide();
          new top.PopLayer({
            "title": "".concat(getDays, ",  Outlets -> ").concat(username.toUpperCase()),
            "content": msg
          });
          ajaxLoadingUsersEdit = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.customer_mobile_number_update_001', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var res = {
      id: id
    };
    $.ajax({
      type: "POST",
      url: "filesmanagers/mobile_number/salesservers.php",
      data: res,
      dataType: "json",
      success: function success(xhr) {
        dalert.alert(xhr.status);
        $('.btn_manager_model_customers' + id).fadeOut("slow");
        $("#loader_httpFeed").hide();
      },
      error: function error(xhr) {
        if (xhr.status.trim() == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert("internet connection working");
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
  });
  $(document).on('click', '.approve_001_002_defaultToken', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var res = {
      urno: $('#custid00_01' + id).val(),
      id: id,
      separator: 1
    };
    $.ajax({
      type: "GET",
      url: "http://mt3api.com:9000/api/validate/sendfaulttoken",
      data: res,
      dataType: "json",
      cache: false
    });
    $("#loader_httpFeed").hide();
    $(".btn_manager_model_customers_default" + id).fadeOut();
  });
  $(document).on('click', '.decline_001_002_defaultToken', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var res = {
      urno: $('#custid00_01' + id).val(),
      id: id,
      separator: 2
    };
    $.ajax({
      type: "GET",
      url: "http://mt3api.com:9000/api/validate/sendfaulttoken",
      data: res,
      dataType: "json",
      cache: false
    });
    $("#loader_httpFeed").hide();
    $(".btn_manager_model_customers_default" + id).fadeOut();
  });
  setInterval(function () {
    var region = $("#regionID_008678").val();
    var res = {
      region: region
    };
    $.ajax({
      type: "POST",
      url: "http://mt3api.com:9000/api/validate/defaulttokencount",
      data: JSON.stringify(res),
      contentType: 'application/json',
      dataType: 'json',
      success: function success(data) {
        var count = data;
        $('#notification_icon').html(count.counts);
      }
    });
  }, 1000 * 10);
  $(document).on('click', '.btn_tm_outlets_fetch_all', function () {
    $("#loader_httpFeed").show();
    var urno = $(this).attr("lang");
    var user_id = $(this).attr("eng");

    if (!ajaxLoadingOutletCards) {
      ajaxLoadingOutletCards = true;
      var req = {
        urno: urno,
        user_id: user_id
      };
      $.ajax({
        type: "POST",
        url: "filesmanagers/tokenmanager/fetch.php",
        data: req,
        cache: false,
        success: function success(msg) {
          $("#fetch_here_token").html(msg);
          $("#loader_httpFeed").hide();
          ajaxLoadingOutletCards = false;
        },
        error: function error(xhr) {
          if (xhr.status == 404) {
            $("#loader_httpFeed").hide();
            dalert.alert("internet connection working");
          } else {
            $("#loader_httpFeed").hide();
            dalert.alert("internet is down");
          }
        }
      });
    }
  });
  $(document).on('click', '.dlete_mod_remove', function () {
    $("#loader_httpFeed").show();
    var id = $(this).attr("id");
    var dataString = "id=" + id;
    $.ajax({
      type: "POST",
      url: "filesmanagers/user_modules/deletemodule.php",
      data: dataString,
      dataType: "json",
      success: function success(xhr) {
        var callBackObject = xhr.status;
        $('.clickModule' + id).remove();
        $("#loader_httpFeed").hide();
      },
      error: function error(xhr) {
        if (xhr.status == 404) {
          $("#loader_httpFeed").hide();
          dalert.alert(xhr);
        } else {
          $("#loader_httpFeed").hide();
          dalert.alert("internet is down");
        }
      }
    });
    return false;
  });
});