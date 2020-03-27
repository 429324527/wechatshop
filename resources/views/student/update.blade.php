<form action="{{ url('/student/update_do/'.$date->brand_id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="baBody">
        <div class="bbD">
            品牌名称：<input type="text" class="input1" name="brand_name" value="{{ $date->brand_name }}" />
        </div>
        <div class="bbD">
            链接地址：<input type="text" class="input1" name="brand_url" value="{{ $date->brand_url }}" />
        </div>
        <div class="bbD">
           上传图片： <img src="{{ asset('storage/'.$date->brand_img )}}" alt="" height="100" width="100">
            </br><input type="file" name="brand_img" />
        </div>
        <div class="bbD">
            是否展示：
            @if($date->brand_status===1)
            <label>
                <input type="radio" name="brand_status" value="1" checked="checked"/>是
            </label>
            <label>
                <input type="radio" name="brand_status" value="2"  />否
            </label>
                @else
                <label>
                    <input type="radio" name="brand_status" value="1" />是
                </label>
                <label>
                    <input type="radio" name="brand_status" value="2" checked="checked" />否
                </label>
                @endif
        </div>
        <div class="bbD">
            <p class="bbDP">
                <input type="submit" class="btn_ok btn_yes" value="提交" />
                <a class="btn_ok btn_no" href="#">取消</a>
            </p>
        </div>
    </div>
</form>
