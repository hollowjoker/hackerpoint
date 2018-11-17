import $ from 'jquery';
import dataTable from 'datatables';
import swal from 'sweetalert2';
import Chart from 'chart.js';

export default class Admin {
  constructor (url) {
    this.url = url
  }

  ready () {
    console.log('admin');
    this.initDataTable();
    this.initLogin();
    this.initInsights();
    this.initCreateItem();
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


  scroll (e) {
    const $e = e
    console.log($e);
  }

  initSwal() {
    swal('asd');
  }

  initInsights() {
    // Top Products
    $.ajax({
      url : $('#insights-top-products').attr('data-route'),
      type : 'get',
    }).done(function(returnData){
      var length = !!returnData && !!returnData.item ? returnData.item.length : 0;
      if(length){
        new Chart(document.getElementById('insights-top-products'), {
          type: 'bar',
          data: {
            labels: returnData.item,
            datasets: [
              {
                label: 'Clicks and Views',
                backgroundColor: [
                  '#3e95cd', '#8e5ea2', '#3cba9f', '#e8c3b9', '#c45850'
                ],
                data: returnData.count
              }
            ]
          },
          options: {
            legend: { display: false },
          }
        });
      }
    });

    // Revenue
    $.ajax({
      url : $('#insights-revenue').attr('data-route'),
      type : 'get',
    }).done(function(returnData){
      var length = !!returnData && !!returnData.months ? returnData.months.length : 0;
      if(length){
        new Chart(document.getElementById("insights-revenue"), {
          type: 'line',
          data: {
            labels: returnData.months,
            datasets: [{ 
                data: returnData.counts,
                label: "Revenue",
                borderColor: "#3e95cd",
                fill: true
              }
            ]
          },
        });
      }
    });

  }

  initCreateItem() {
    $('#form-add-item').submit(function(){
      var formAction = $(this).attr('action');
      var formData = new FormData(this);
      var relocation = $(this).attr('data-relocation');
      $.ajax({
        url : formAction,
        data : formData,
        type: "POST",
        contentType: false,
        cache: false,
        processData:false,
      }).done(function(returnData){
        console.log(returnData);
        // if(returnData.type == 'success'){
        //   window.location.href = relocation;
        // }
        // else{
        //   alert(returnData.message);
        // }
      });
      return false;
    });
  }
}
