
<?php
include_once('links.php');
include_once('header2.php');
require_once('lidhjameDB.php');
?>
<div id="account">
    <div class="col-lg-6 col-sm-6">
        <div class="card hovercard">


            <div class="card-info">

            </div>
        </div>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="hidden-xs">Profile</div>
                </button>
            </div>

        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <table class="table">
                        <tr>
                            <td>Emri</td>
                        </tr>
                        <tr>
                            <td>Mbiemri</td>
                        </tr>

                        <tr>
                            <td>Email</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

