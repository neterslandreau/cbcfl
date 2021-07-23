$(function() {
    // const content = [
    //     '![image](https://uicdn.toast.com/toastui/img/tui-editor-bi.png)',
    // ].join('\n');

    $('#teditor').toastuiEditor({
        previewStyle: 'vertical',
        height: '500px',
        initialValue: content,
        toolbarItems: ['all']
    });

    const content = $('#editor').toastuiEditor('getHtml');

    console.log(content);

    // $('#viewer').toastuiEditor({
    //     viewer: true,
    //     previewStyle: 'vertical',
    //     height: '500px',
    //     initialValue: content
    // });
});
