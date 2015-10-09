<?= $this->Form->create($enquiry); ?>
</br> </br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                <fieldset>
                <legend class="text-center header">Contact us</legend>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <?= $this->Form->input('firstname', ['class' => 'form-control', 'id' => 'fname', 'type' => 'text', 'placeholder' => "First Name", 'label' => '']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <?= $this->Form->input('lastname', ['class' => 'form-control', 'id' => 'lname', 'type' => 'text', 'placeholder' => "Last Name", 'label' => '' ]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <?= $this->Form->input('email', ['class' => 'form-control', 'id' => 'email',  'type' => 'text', 'placeholder' => "Email Address", 'label' => '' ]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <?= $this->Form->input('phone', ['class' => 'form-control', 'id' => 'phone',  'type' => 'text', 'placeholder' => "Phone Number", 'label' => '' ]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <?= $this->Form->input('comment', ['class' => 'form-control', 'id' => 'message',  'type' => 'textarea', 'placeholder' => "Enter your message for us here. We will get back to you within 2 business days.", 'rows' => '7', 'label' => '' ]) ?>
                        </div>
                    </div>
                </form>  
            </br> </br>
                <div class="col-md-12 text-center" style="padding-top: 10px">
                    <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>               
                </div>
            </div>
        </div>
    <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Office</div>
                    <div class="panel-body text-center">
                        <h4><b>Address</b></h4>
                        <div>
                        9A Citrus Street<br/>
                        Braeside, VIC 3195<br/>
                        <h4><b>Phone Number</b></h4>
                        (03) 9588 2198<br/>
                        0450 908 271<br/>
                        <h4><b>Email Address</b></h4>
                        office@blueskywindows.com.au<br/>
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>



<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(-37.990865, 145.109556);
            var mapOptions = {
                center: myLocation,
                zoom: 14
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>