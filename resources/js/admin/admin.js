import $ from 'jquery';
import dataTable from 'datatables';
<<<<<<< HEAD
import swal from 'sweetalert2';
import Chart from 'chart.js';

export default class Admin {
  constructor() {}

  init() {
=======
import $ from 'jquery'
export default class Admin {
  constructor (url) {
    this.url = url
  }

  ready () {
    console.log('admin');
>>>>>>> 569a291f99482047cdfb00992f6dc4c5324fd9cf
    this.initDataTable();
    this.initInsights();
  }

  scroll (e) {
    const $e = e
    console.log($e);
  }

  initDataTable () {
    $('#tae').dataTable();
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
