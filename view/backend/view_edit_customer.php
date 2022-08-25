<div class="template-customer">
    <h1>Cập nhập thông tin của ban</h1>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="wrapper-form">

                <form method='post' action="<?php echo $form_action ?>">
                    <p class="title"><span>Cập nhật thông tin cá nhân</span></p>
                    <div class="form-group">
                        <label>Họ và tên:</label>
                        <input type="text" name="hovaten" class="input-control"
                               required
                                 value="<?php echo isset($customer->hovaten) ? $customer->hovaten : "" ?>"
                        >
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ:</label>
                        <input type="text" name="diachi" class="input-control"
                               required
                               value="<?php echo isset($customer->diachi) ? $customer->diachi : "" ?>"
                        >
                    </div>
                    <div class="form-group">
                        <label>Điện thoại:</label>
                        <input type="text" name="dienthoai" class="input-control"
                            required

                               value="<?php echo isset($customer->dienthoai) ? $customer->dienthoai : "" ?>"

                        >
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="input-control"
                        >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="button" value="Cập nhật">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>


    </div>
</div>