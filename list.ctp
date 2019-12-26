							// Include the helper through appView.php and pass the currentPage, totalRow and resultPerPage value
              <div class="paginator">
								<?php                
                  $this->CustomPaginate->setCurrent($currentPage);
                  $this->CustomPaginate->setTotal($total_row);
                  $this->CustomPaginate->setRPP($resultsPerPage);
                  echo $this->CustomPaginate->parse();
                ?>		
							</div>
