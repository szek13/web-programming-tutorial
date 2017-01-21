/* var contact = '<tr>'+
    '<td>Szekely</td>'+
    '<td>Csongor</td>'+
    '<td>1245789</td>'+
    '</tr>';
*/

function getContactHTML(contact) {
    return'<tr>'+
    '<td>' + contact.firsName + '</td>'+
    '<td>' + contact.lastName + '</td>'+
    '<td>' + contact.phone + '</td>'+
    '</tr>';
}

// document.getElementById('agenda').getElementByTagName('tbody')[0].innerHTML += contact;
// $('#agenda tbody').html(contact + contact);


var contacts = [
    {firsName: 'Mihai', lastName: 'Ioan', phone:'123'},
    {firsName: 'Vasile', lastName: 'U', phone:'345'},
    {firsName: 'Victor', lastName: 'D', phone:'567'},
];

function showContacts(contacts) {
    var contactsHTML ='';

    for (var i=0; i<contacts.length; i++){
        console.info(contacts[i]);
        contactsHTML += getContactHTML(contacts[i]);
    }

    $('#agenda tbody').html(contactsHTML);
}

showContacts(contacts);

/* var contactsHTML ='';

for (var i=0; i<contacts.length; i++){
    console.info(contacts[i]);
    contactsHTML += getContactHTML(contacts[i]);
}

$('#agenda tbody').html(contactsHTML);
  */

