<main>
    <div class="row">
        <div class="col s12 m12 l6 offset-l3">
            <div class="card">
                <div class="row">
                    <div class="col s12 m12 l12 center-align">
                        <div class="card-title" style="padding: 10px 0">
                            <h4>Rate your Service <i class="fas fa-star" style="color:gold;"></i></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <?php
                            foreach($data as $row){
                                echo $row->rating;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>