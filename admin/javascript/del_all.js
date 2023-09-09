function del_all() {
  dom = deleteall.document;

  if (this.confirm("Do you really want to Delete All Rows ?") == false)
    return false;
  else return true;
}
