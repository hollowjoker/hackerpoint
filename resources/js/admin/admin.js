import dataTable from 'datatables';
import $ from 'jquery'
export default class Admin {
  constructor (url) {
    this.url = url
  }

  ready () {
    console.log('admin');
    this.initDataTable();
  }

  scroll (e) {
    const $e = e
    console.log($e);
  }

  initDataTable () {
    $('#tae').dataTable();
  }
}