/** Подтверждение удаления Заказа */

$('.delete').click(function () {
    var res = confirm('Подтвердите действия!');
    if(!res) return false;

});

/** Редактирование Заказа */

$('.redact').click(function () {
    var res = confirm('Вы можете только изменить Комментарий!');
    return false;

});
