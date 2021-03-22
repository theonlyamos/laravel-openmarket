/**
 * Description
 * @authors Your Name (you@example.org)
 * @date    2021-03-21 15:23:38
 * @version 1.0.0
 */

$(()=>{
  const $ACTIONS = {
    delete: {name: 'delete', icon: 'fa-trash', color: 'danger', function: "deleteProduct"},
    //edit: {name: 'edit', icon: 'fa-edit', color:'primary', function: 'updateSchool'}
  }


  $("#confirmModal").on("show.bs.modal", (e)=>{
    let button = $(e.relatedTarget)[0];
    let action = $(button).data('action');
    let url = $(button).data('url');
    action = $ACTIONS[action];
    let target = $(button).data('name');
    if (!target){
        target = "the selected item(s)"
    }
    let id = $(button).data('id');
    let modal = $(e.target);
    modal.find('.modal-body').html(`Are you sure you want to ${action.name} <b><em>${target}</em></b>?`);
    modal.find(".modal-footer button[type='submit']").removeClass('bg-secondary').removeClass('bg-danger').removeClass('bg-info');
    modal.find(".modal-footer button[type='submit']").addClass(`bg-${action.color}`).html(`<i class="fas ${action.icon} fa-fw"></i> `+action.name.charAt(0).toUpperCase() + action.name.slice(1));
    modal.find(".modal-footer button[type='submit']").attr('onclick', `${action.function}('${url}',${id})`)
})
})