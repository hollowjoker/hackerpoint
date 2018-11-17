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
    new Chart(document.getElementById('insights-top-products'), {
      type: 'bar',
      data: {
        labels: [
          'Product 1', 'Product 2', 'Product 3', 'Product 4', 'Product 5'
        ],
        datasets: [
          {
            label: 'Clicks and Views',
            backgroundColor: [
              '#3e95cd', '#8e5ea2', '#3cba9f', '#e8c3b9', '#c45850'
            ],
            data: [32, 40, 10, 12, 23]
          }
        ]
      },
      options: {
        legend: { display: false },
      }
    });

    // Revenue
    new Chart(document.getElementById("insights-revenue"), {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [{ 
            data: [32000, 16000, 64000, 61000, 32000, 16000, 32000, 16000, 64000, 61000, 32000, 16000],
            label: "Revenue",
            borderColor: "#3e95cd",
            fill: true
          }
        ]
      },
    });

  }
}
