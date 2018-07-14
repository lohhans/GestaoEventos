Feature: CRUD usuário
    Como um usuário do sistema
    Eu quero me cadastrar no sistema
    Para que eu possa realizar minha inscrição ou cadastrar eventos

//Controller Scenario
    Scenario: creating a new user
    Given the user "Gabrielle" with cpf "123" is not registered in the system
    When I register the user "Gabrielle" with cpf "123"
    Then the system has the user "Gabrielle" with cpf "123" registered
