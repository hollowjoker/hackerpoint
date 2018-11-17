import dataTable from 'datatables';
import $ from 'jquery'
export default class Admin {
  constructor (url) {
    this.url = url
  }

  ready () {
    console.log('admin');
    this.initDataTable();
    this.initLogin();
  }

  initDataTable() {
    $('#dtDashboard').DataTable({
      processing : true,
      serverSide : true,
      responsive : true,
      searching : true,
      autoWidth : false,
      ajax : {
        url : $('#dtDashboard').attr('data-location'),
      },
      error : function(returnData){
        console.log(returnData);
      }
    });
  }

  initLogin() {
    $('#loginForm').submit(function(){
      var formAction = $(this).attr('action');
      var formData = $(this).serialize();
      $.ajax({
        url : formAction,
        method : 'post',
        data : formData,
      }).done(function(returnData){
        if(returnData.type == 'success'){
          window.location.href = URL+"/admin/dashboard";
        }
        else{
          alert(returnData.message);
        }
        // console.log(returnData.length);
      });
      return false;
    });
  }
}