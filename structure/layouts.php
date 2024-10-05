<?php
    class layouts{
        public function heading(){
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="css/style.css" />
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
            </head>
            <body>
                <div class = "container">
            <?php
        }

        public function banner(){
            ?>
            <div class="p-3 mb-4 bg-body-tertiary rounded-3">
              <div class="container-fluid py-2">
                <h1 class="display-5 fw-bold">Assignemnt II</h1>
                <p class="col-md-8 fs-4">Real time operating systems for embedded systems development
Is used to address several industry verticals such as Consumer devices, Automotive devices etc.It not only focuses on the basic Real time Operating systems but also systems like Priority Inversion, Advanced Memory Protection and Error Management. It also covers interesting topics such as why a Round Robin Scheduling is not required for Safety Critical Avionics Applications.
  </p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
              </div>
            </div>
          <?php
        }

        public function footer(){
            ?>
            <div class="footer">
                Copyright &copy; ICS <?php print date("Y"); ?>
            </div>
        </body>
        </html>
            <?php
        }
    }
