<?php $this->load->view('partials/head'); ?>
<?php $this->load->view('partials/navbar'); ?>
   
  <div class="content">
    
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner col-lg-8 mx-auto">
          <div class="carousel-item active">
            <img src="http://placehold.it/320x150" class="center-block w-100"  alt="">
          </div>
          <div class="carousel-item">
            <img src="http://placehold.it/300x150" class="center-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="http://placehold.it/330x150" class="center-block w-100" alt="">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <!-- <th>
                        No
                      </th> -->
                      <th>
                        Username
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Password
                      </th>
                      <th>
                        Level
                      </th>
                    </thead>
              
                    <tbody>
                     <?php foreach($user as $u):?>
                     <tr>
                       <td><?php echo $u->username ?></td>
                       <td><?php echo $u->name ?></td>
                       <td><?php echo $u->email ?></td>
                       <td><?php echo $u->phone ?></td>
                       <td><?php echo $u->password ?></td>
                       <td><?php echo $u->level ?></td>
                     </tr>
                    <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php $this->load->view('partials/footer'); ?>