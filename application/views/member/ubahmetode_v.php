
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<div class="col-lg-12">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Metode Pembayaran</h4>
                </div>
                <div class="card-body">
                    <table class="table-bordered" style="background: rgba(184, 184, 184, 0.03);">
                        <tbody>
                            <div class="col-md-12">
                                <div class="panel-group"  id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Kartu Kredit/Debit Online <input type="radio" name="metode" id="kredit" style="margin-left: 70%;"></a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <button onclick="check1()">Kartu Kredit/Debit Online</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Transfer Bank <input type="radio" name="metode" id="atm" style="margin-left: 70%;"></a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="radio">
                                                  <label><input onclick="check2()" type="radio" name="bank" id="bni">BNI</label>
                                                </div>
                                                <div class="radio">
                                                  <label><input onclick="check2()" type="radio" name="bank" id="bca">BCA</label>
                                                </div>
                                                <div class="radio">
                                                  <label><input onclick="check2()" type="radio" name="bank" id="bri">BRI</label>
                                                </div>
                                                <div class="radio">
                                                  <label><input onclick="check2()" type="radio" name="bank" id="mandiri">Mandiri</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Indomaaret/Ceriamart <input type="radio" name="metode" id="indomaret" style="margin-left: 70%;"></a>
                                            </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <button onclick="check3()">Indomaaret/Ceriamart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Alfamart <input type="radio" name="metode" id="alfamart" style="margin-left: 70%;"></a>
                                            </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <button onclick="check4()">Alfamart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <a href="#" class="btn btn-primary waves-effect waves-light btn-outline-info" style="width:100%;"> Kirimkan </a>

                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
function check1() {
  document.getElementById("kredit").checked = true;
  document.getElementById("bni").checked = false;
  document.getElementById("bca").checked = false;
  document.getElementById("bri").checked = false;
  document.getElementById("mandiri").checked = false;
}
function check2() {
  document.getElementById("atm").checked = true;
}
function check3() {
  document.getElementById("indomaret").checked = true;
  document.getElementById("bni").checked = false;
  document.getElementById("bca").checked = false;
  document.getElementById("bri").checked = false;
  document.getElementById("mandiri").checked = false;
}
function check4() {
  document.getElementById("alfamart").checked = true;
  document.getElementById("bni").checked = false;
  document.getElementById("bca").checked = false;
  document.getElementById("bri").checked = false;
  document.getElementById("mandiri").checked = true;
}
</script>
