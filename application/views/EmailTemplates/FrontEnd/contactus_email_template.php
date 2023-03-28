<!-- @format -->
<!-- @format -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Anytime-security</title>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Courgette"
      rel="stylesheet"
    />
  </head>
  <body style="font-family: 'Montserrat', sans-serif">
    <table
      style="
        max-width: 700px;
        margin: 10px auto;
        width: 100% !important;
        background: #f6f6f6;
        padding: 10px;
      "
      width="100% !important"
      border="0"
      cellpadding="0"
      cellspacing="0"
    >
      <tbody>
        <tr>
          <td>
            <table style="background: #fff; margin: 0 auto; width: 100%">
              <tr>
                <td>
                  <div
                    style="
                      background-color: #00517c;
                      width: 100%;
                      height: 160px;
                      display: flex;
                      justify-content: center;
                    "
                  >
                    <div>
                      <img
                        src="<?php echo base_url('assets/images/Logo-bottom.png')?>"
                        style="width: 70px; padding-top: 23px"
                      />
                    </div>
                    <span
                      style="
                        color: #fff;
                        padding-top: 44px;
                        padding-left: 19px;
                        font-size: 31px;
                        font-weight: 700;
                      "
                      >Anytime Security</span
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <table
                    style="
                      background: #fff;
                      margin: 0 auto;
                      width: 80%;
                      box-shadow: 0px 2px 8px 0px #e2e2e2;
                      margin-top: -40px;
                      padding: 10px;
                      margin-bottom: 31px;
                    "
                  >
                    <tr>
                      <td>
                        <h2
                          style="
                            color: #191b1c;
                            text-align: center;
                            padding-top: 20px;
                            font-size: 22px;
                            line-height: 26px;
                            margin: 0px;
                          "
                        >
                          <b>Contect Us</b>
                        </h2>
                        <p
                          style="
                            font-size: 14px;
                            color: #202020;
                            margin: 0px;
                            line-height: 20px;
                            padding-top: 20px;
                            text-align: center;
                          "
                        ></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <table
                          style="
                            background: #f8f8f8;
                            margin: 0 auto;
                            width: 100%;
                            border-collapse: collapse;
                            margin-top: 9px;
                            border: 1px solid #e2e2e2;
                          "
                        >
                          <tr>
                            <div style="display: flex">
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 16px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>FIRST NAME</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo ucwords($supportDetails['fname'])?>
                                </p>
                              </td>
                              <td>
                                <p
                                  style="
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 16px;
                                    padding-left: 22px;
                                    font-size: 13px;
                                  "
                                >
                                  <b>CITY</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo ucwords($supportDetails['city'])?>
                                </p>
                              </td>
                            </div>
                          </tr>
                          <tr>
                            <div style="display: flex">
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>LAST NAME</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo ucwords($supportDetails['lname'])?>
                                </p>
                              </td>
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>ZIP CODE</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo $supportDetails['zip_code']?>
                                </p>
                              </td>
                            </div>
                          </tr>
                          <tr>
                            <div style="display: flex">
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>EMAIL</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo $supportDetails['email']?>
                                </p>
                              </td>
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>PHONE</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo $supportDetails['phone']?>
                                </p>
                              </td>
                              <!-- <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>POSITION</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                  HR
                                </p>
                              </td> -->
                            </div>
                          </tr>
                          <tr>
                            <div style="display: flex">
                              <!-- <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>PHONE</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php //echo $residentialsDetails['phone']?>
                                </p>
                              </td> -->
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>COUNTRY</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo ucwords($supportDetails['country'])?>
                                </p>
                              </td>
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>STATE</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo $supportDetails['state']?>
                                </p>
                              </td>
                            </div>
                          </tr>
                          <tr>
                            <div style="display: flex">
                              <!-- <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>STATE</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo $supportDetails['state']?>
                                </p>
                              </td> -->
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>REACH DATE</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;

                                    padding-left: 22px;
                                  "
                                >
                                <?php echo $supportDetails['reach_date']?>
                                </p>
                              </td>
                              <td>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 27px;
                                    padding-top: 10px;
                                    padding-left: 22px;
                                  "
                                >
                                  <b>REACH TIME</b>
                                </p>
                                <p
                                  style="
                                    font-size: 13px;
                                    color: #202020;
                                    margin: 0px;
                                    line-height: 15px;
                                    padding-bottom: 20px;
                                    padding-left: 22px;
                                  "
                                >
                                <?php echo $supportDetails['reach_time']?>
                                </p>
                              </td>
                            </div>
                          </tr>
                          
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td style="text-align: center">
                  <a
                    href="<?php echo base_url()?>"
                    style="
                      text-decoration: none;
                      font-size: 18px;
                      color: #fff;
                      background: #00517c;
                      font-weight: 700;
                      border-radius: 8px;
                      padding: 14px 14px 14px 14px;
                    "
                    >Visit website</a
                  >
                </td>
              </tr>

              <tr>
                <td>
                  <div
                    style="
                      width: 100%;
                      float: left;
                      margin-top: 30px;
                      display: flex;
                      background: #00517c;
                      line-height: 40px;
                    "
                  >
                    <div style="width: 47%">
                      <p
                        style="
                          text-align: center;
                          line-height: 38px;
                          font-size: 13px;
                          color: #fff;
                          font-weight: 300;
                        "
                      >
                      <?php echo date('Y')?>-<?php echo date('Y', strtotime('+1 year'))?> Copyrights © Anytime-security
                      </p>
                    </div>
                    <div
                      style="
                        text-align: center;
                        /* padding: 10px 0px 0px 0px; */
                        width: 47%;
                        float: left;
                        margin: 11px 0px;
                      "
                    >
                      <a href="<?php echo base_url('privacy-policy')?>" style="text-decoration-color: #fff"
                        ><span
                          style="
                            color: #fff;
                            font-weight: 600;
                            font-size: 14px;
                            font-family: sans-serif;
                            cursor: pointer;
                            margin-right: 15px;
                          "
                          >Privacy Policy</span
                        ></a
                      >
                      <!-- <a href="javascript:void(0)" style="text-decoration-color: #fff"
                        ><span
                          style="
                            color: #fff;
                            font-weight: 600;
                            font-size: 14px;
                            font-family: sans-serif;
                            cursor: pointer;
                            margin-right: 15px;
                          "
                          >Terms & Conditions</span
                        ></a
                      > -->
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
