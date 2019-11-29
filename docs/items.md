@startuml

legend right
        |<#FFDDDD>  <b>E</b>  |  <b>Role</b> |
        |<#DDFFDD>  <b>P</b>  |  <b>Permission</b>  |
endlegend

!define Role(name,desc) component "desc" as name << (R,#EEEEEE) >> #FFDDDD
!define Permission(name,desc) () name as "desc" #DDFFDD
hide methods
hide stereotypes

package "Client" {

    Role(client_manager, "client.manager")

    Permission(client_create, "client.create")
    Permission(client_update, "client.update")
    Permission(client_get_note, "client.get-note")
    Permission(client_set_note, "client.set-note")
}


client_create -> client_manager
client_update -> client_manager
client_get_note -> client_manager
client_set_note -> client_manager

client_create -[hidden]-> client_update
client_update -[hidden]-> client_get_note
client_get_note -[hidden]-> client_set_note

@enduml
