<div class="col-sm-12 col-lg-4">
                      <div
                        class="card ml-1 "
                        style="width: 20rem; height: 28rem;"
                      >
                        <img
                          src="img/mcomp.jpg"
                          class=" card-img-top"
                          alt=""
                          style="width: 318px; height: 153px;"
                        />
                        <div class="card-body">
                          <h4 class="card-title">
                            <?php echo $challenges[$i]->module; ?>
                          </h4>
                          
                          <p class="text-center text-muted text-monospace ">
                            <?php echo $challenges[$i]->point; ?> points | <?php echo $challenges[$i]->nbPersonSolved; ?>/5 | <?php echo $challenges[$i]->nbOfQuestions; ?> questions
                          </p>
                        </div>
                        <div class="card-footer ">
                          <button
                            onclick="load('<?php echo $challenges[$i]->story; ?>', <?php echo $challenges[$i]->id; ?>)"
                            type="button"
                            class="btn btn-outline-primary"
                            data-toggle="modal"
                            data-target="#moreInfo"
                          >
                            More Info
                          </button>
                          <button
                            type="button"
                            class="btn btn-primary "
                            style="margin-left: 105px;"
                          >
                            Start
                          </button>

                          <!-- Make a pop up here to access when clicking on "More Info" containing: 1. Full decription 2. Resources-->

                          <!-- ### Modal ###-->

                          <div class="modal" id="moreInfo">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title">More Info</h3>
                                  <button class="close" data-dismiss="modal">
                                    &times;
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <h4>
                                    <strong>
                                      Challenge Description
                                    </strong>
                                  </h4>
                                  <p>
                                    <?php echo $challenges[$i]->story; ?>
                                  </p>
                                  <hr />
                                  <h4>
                                    <strong>
                                      Resources
                                    </strong>
                                  </h4>
                                  <p>
                                    Here you can find some useful resources to
                                    not miss out on if you want to have a better
                                    chance at winning the challenge!
                                  </p>
                                </div>
                                <div class="modal-footer">
                                  <button
                                    class="btn btn-outline-primary"
                                    data-dismiss="modal"
                                  >
                                    Close
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <br />
                          <br />

                          <!-- ### Modal ###-->
                        </div>
                      </div>
                    </div>