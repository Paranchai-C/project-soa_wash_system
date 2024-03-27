@extends('layout.layout')
@section('title','order')
@section('content')

<form method="POST" action="{{ route('order_post') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group" enctype="multipart/form-data">
        <label for="">เลือกpackage</label>
        <select name="package" id="package">
            <option selected disabled>กรุณาเลือกpackage</option>";
            <?php
            foreach ($package as $p) {

                echo "<option value =" . $p['id'] . ">" . "size " . $p['name'] . " ราคา = " . $p['price'] . "</option> ";
            }
            ?>
        </select>
    </div><br>
    <div class="form-group">
        <label for="">น้ำยาปรับผ้านุ้ม</label>
        <select name="softener" id="softener">
            <option selected disabled>กรุณาเลือกน้ำยาปรับผ้านุ้ม</option>";
            <?php
            foreach ($softener as $s) {

                echo "<option value =" . $s['id'] . ">" . "size " . $s['name'] . " ราคา = " . $s['price'] . "</option> ";
            }
            ?>
        </select>
    </div><br>
    <div class="form-group">
        <label for="">อุณหภูมิ</label>
        <select name="Temperature" id="Temperature">
            <option selected disabled>กรุณาเลือกอุณหภูมิ</option>";
            <?php
            foreach ($Temperature as $t) {

                echo "<option value =" . $t['id'] . ">" . "size " . $t['name'] . " ราคา = " . $t['price'] . "</option> ";
            }
            ?>
        </select>
    </div><br>
    <div class="form-group">
        <label for="">เพิ่มเวลาอบผ้า<label>
                <input type="checkbox" id="plusdry" name="plusdry" value="1">
    </div><br>
    <div class="form-group">
        <input type="file" name="image" id="image">
    </div>
    <a href="#">
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
    </a>

    <a href="" class="btn btn-success">
        กลับ
    </a>
</form>
@endsection