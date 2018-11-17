import dataTable from 'datatables';
import $ from 'jquery'
export default class Admin {
  constructor () {

  }

  init () {
    console.log('admin');
    this.initDataTable();
  }

  initDataTable() {
    $('#tae').dataTable();
  }
}