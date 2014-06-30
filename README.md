php-iso20022
============

ISO 20022 XML Message generation PHP class.

ISO 20022 is the ISO Standard for Financial Services Messaging. It describes a Metadata Repository containing descriptions of messages and business processes, and a maintenance process for the Repository Content.

The Repository contains a huge amount of financial services metadata that has been shared and standardized across the industry. The metadata is stored in UML models with a special ISO 20022 UML Profile. Underlying all of this is the ISO 20022 metamodel - a model of the models. The UML Profile is the metamodel transformed into UML. The metadata is transformed into the syntax of messages used in financial networks. The first syntax supported for messages was XML Schema.

##Messages implemented
1. CAMT.054.001.02 - BankToCustomerDebitCreditNotificationV02

###CAMT.054.001.02

BankToCustomerDebitCreditNotificationV02 

This is used by some banks (e.g. OP Pohjola, Finland) to process payments or to notify of payments. It can be used B2C or C2B.

##Credit

[Code Master Oy](http://codemaster.fi/)

