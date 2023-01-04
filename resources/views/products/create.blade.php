<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tagify/dist/tagify.css') }}">
    <script src="{{ asset('tagify/dist/jQuery.tagify.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('tagify/dist/tagify.css') }}">
    <script src="{{ asset('tagify/dist/jQuery.tagify.min.js') }}"></script>
    <title>creat product</title>
</head>

<body>
    <div class="mx-auto" style=" width: 80%">
        @csrf
        <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="POST">
            <h1>Create Product</h1>
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">product name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <div class="form-floating">
                    <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" name="price" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">main image</label>
                <input type="file" class="form-control" id="main_image" name="main_image">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                    <option selected> select category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $product->category_id == $category->id ? 'selected' : '' }}
                            {{ $category->name }}</option>
                    @endforeach

                </select>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" class="form-control" value="" id="tags"
                        placeholder="Enter tags">

                </div>

            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="{{ asset('assets/dashboard/js/jQuery.tagify.min.js') }}"></script>
    <script>
        var input = document.querySelector('input[name=tags]'),
            tagify = new Tagify(input, {
                pattern: /^.{0,20}$/, // Validate typed tag(s) by Regex. Here maximum chars length is defined as "20"
                delimiters: ",| ", // add new tags when a comma or a space character is entered
                keepInvalidTags: true, // do not remove invalid tags (but keep them marked as invalid)
                editTags: {
                    clicks: 2, // single click to edit a tag
                    keepInvalid: false // if after editing, tag is invalid, auto-revert
                },
                maxTags: 6,
                whitelist: {!! json_encode($tags) !!},
                transformTag: transformTag,
                backspace: "edit",
                placeholder: "Type something",
                dropdown: {
                    enabled: 1, // show suggestion after 1 typed character
                    fuzzySearch: false, // match only suggestions that starts with the typed characters
                    position: 'text', // position suggestions list next to typed text
                    caseSensitive: true, // allow adding duplicate items if their case is different
                },
                templates: {
                    dropdownItemNoMatch: function(data) {
                        return `<div class='${this.settings.classNames.dropdownItem}' tabindex="0" role="option">
                    No suggestion found for: <strong>${data.value}</strong>
                </div>`
                    }
                }
            })
        // generate a random color (in HSL format, which I like to use)
        function getRandomColor() {
            function rand(min, max) {
                return min + Math.random() * (max - min);
            }
            var h = rand(1, 360) | 0,
                s = rand(40, 70) | 0,
                l = rand(65, 72) | 0;
            return 'hsl(' + h + ',' + s + '%,' + l + '%)';
        }

        function transformTag(tagData) {
            tagData.color = getRandomColor();
            tagData.style = "--tag-bg:" + tagData.color;
            if (tagData.value.toLowerCase() == 'shit')
                tagData.value = 's✲✲t'
        }
        tagify.on('add', function(e) {
            console.log(e.detail)
        })
        tagify.on('invalid', function(e) {
            console.log(e, e.detail);
        })
        var clickDebounce;
        tagify.on('click', function(e) {
            const {
                tag: tagElm,
                data: tagData
            } = e.detail;
            // a delay is needed to distinguish between regular click and double-click.
            // this allows enough time for a possible double-click, and noly fires if such
            // did not occur.
            clearTimeout(clickDebounce);
            clickDebounce = setTimeout(() => {
                tagData.color = getRandomColor();
                tagData.style = "--tag-bg:" + tagData.color;
                tagify.replaceTag(tagElm, tagData);
            }, 200);
        })
        tagify.on('dblclick', function(e) {
            // when souble clicking, do not change the color of the tag
            clearTimeout(clickDebounce);
        })
    </script>



    <script src="{{ asset('tagify/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('tagify/dist/jQuery.tagify.js') }}"></script>
    <script src="{{ asset('tagify/dist/tagify.js') }}"></script>
    <script>
        $('[name=tags]').tagify();
    </script>
</body>

</html>
