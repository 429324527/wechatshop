<form action="{{ url('/add_do')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="baBody">
        <div class="bbD">
            图书名称：<input type="text" class="input1" name="brand_name" />
        </div>
        <div class="bbD">
            链接地址：<input type="text" class="input1" name="brand_url" />
        </div>
        <div class="bbD">
            上传图片：<input type="file" name="brand_img" />
        </div>
        <div class="bbD">
            是否展示：
            <label>
                <input type="radio" name="brand_status" value="1" />是
            </label>
            <label>
                <input type="radio" name="brand_status" value="2" checked="checked" />否
            </label>
        </div>
        <div class="bbD">
            <p class="bbDP">
                <input type="submit" class="btn_ok btn_yes" value="提交" />
                <a class="btn_ok btn_no" href="/add">取消</a>
            </p>
        </div>
    </div>
</form>
