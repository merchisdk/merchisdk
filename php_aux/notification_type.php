<?php

const NO_TYPE = 0;  # System
const DRAFT_SENT = 1;  # User
const DRAFT_CHANGE_REQUEST = 2;  # User
const DRAFT_APPROVED = 3;  # User
const DESIGNER_ASSIGNED = 4;  # Domain
const DESIGNER_CHANGED = 5;  # Domain
const DRAFT_COMMENT = 6;  # User
const JOB_PAID = 7;  # User / Domain
const INVOICE_PAID = 8;  # User / Domain
const PAYMENT_ACCEPTED = 9;  # User / Domain
const SEND_INVOICE = 10;  # Domain
const JOB_COMMENT = 11;  # User
const PRODUCTION_COMMENT = 12;  # User
const JOB_STALE = 13;  # Domain
const MANAGER_ASSIGNED = 14;  # Domain
const ORDER_RECEIVED = 15;  # Domain
const CLIENT_CHANGED = 16;  # Domain
const PRODUCTION_FILE_UPLOADED = 17;  # User
const PRODUCTION_CANCELLED = 18;  # Domain
const PRODUCTION_FINISHED = 19;  # User
const PRODUCTION_COMMENCED = 20;  # User
const QUOTE_APPROVED = 21;  # User
const QUOTE_REFUSED = 22;  # User
const QUOTE_SUBMITTED = 23;  # User
const QUOTE_FAILED = 24;  # Domain
const QUOTE_COMMENCED = 25;  # Domain
const QUOTE_EXPIRED = 26;  # Domain
const SUPPLIER_ASSIGNED = 27;  # Domain
const SUPPLIER_REFUSED = 28;  # User
const READY_FOR_SHIPPING = 29;  # Domain
const SHIPMENT_UPDATE = 30;  # User
const SIGN_UP_CONFIRMATION = 31;  # Domain / System
const AUTOMATIC_JOB_RESPONSE = 32;  # User / Domain
const CRASH_EVENT = 33;  # System
const MANAGER_SUMMARY = 34;  # System
const PASSWORD_RESET = 35;  # System
const MANAGER_REASSIGNED = 36;  # Domain
const EMAIL_RESPONSE = 37;  # Domain / System
const JOB_NOTIFICATION = 38;  # User / Domain
const JOB_REMINDER = 39;  # User / Domain
const GENERAL_REMINDER = 40;  # User / Domain
const INVOICE_EMAIL_RESPONSE = 41;  # User / Domain
const AUTOMATIC_INVOICE_RESPONSE = 42;  # User / Domain
const SHIPMENT_DISPATCH_CLOSE = 43;  # Domain / User
const SHIPMENT_NOT_DISPATCHED = 44;  # Domain / User
const SHIPMENT_EXPECTED_DATE_WARNING = 45;  # Domain / User
const JOB_ADDED_TO_SHIPMENT = 46;  # User / Domain
const JOB_REMOVED_FROM_SHIPMENT = 47;  # User / Domain
const ASSIGNMENT_REMOVED_FROM_SHIPMENT = 48;  # User / Domain
const ASSIGNMENT_ADDED_TO_SHIPMENT = 49;  # User / Domain
const SHIPMENT_EXPECTED_DATE_PAST = 50;  # Domain / User
const JOB_FILE_UPLOADED = 51;  # User
const DOMAIN_INVITATION = 52;  # Domain

const SHOW_USER_AVATAR =
    [DRAFT_SENT, DRAFT_CHANGE_REQUEST, DRAFT_APPROVED,
     DRAFT_COMMENT, JOB_COMMENT, PRODUCTION_COMMENT,
     PRODUCTION_FILE_UPLOADED, PRODUCTION_FINISHED,
     PRODUCTION_COMMENCED, QUOTE_APPROVED, SHIPMENT_UPDATE,
     JOB_FILE_UPLOADED];

const SHOW_DOMAIN_AVATAR =
    [NO_TYPE, DESIGNER_ASSIGNED, DESIGNER_CHANGED,
     SEND_INVOICE, JOB_STALE, MANAGER_ASSIGNED, ORDER_RECEIVED,
     CLIENT_CHANGED, PRODUCTION_CANCELLED, QUOTE_FAILED,
     QUOTE_COMMENCED, QUOTE_EXPIRED, SUPPLIER_ASSIGNED,
     READY_FOR_SHIPPING, SIGN_UP_CONFIRMATION, CRASH_EVENT,
     MANAGER_SUMMARY, PASSWORD_RESET, MANAGER_REASSIGNED,
     EMAIL_RESPONSE, SHIPMENT_EXPECTED_DATE_PAST, DOMAIN_INVITATION];

const SHOW_USER_OR_DOMAIN_AVATAR =
    [JOB_PAID, INVOICE_PAID, PAYMENT_ACCEPTED,
     AUTOMATIC_JOB_RESPONSE, JOB_NOTIFICATION,
     JOB_REMINDER, GENERAL_REMINDER,
     INVOICE_EMAIL_RESPONSE, AUTOMATIC_INVOICE_RESPONSE,
     JOB_ADDED_TO_SHIPMENT, JOB_REMOVED_FROM_SHIPMENT,
     ASSIGNMENT_REMOVED_FROM_SHIPMENT,
     SHIPMENT_EXPECTED_DATE_PAST,
     ASSIGNMENT_ADDED_TO_SHIPMENT];

const SHOW_DOMAIN_OR_USER_AVATAR =
    [SHIPMENT_DISPATCH_CLOSE, SHIPMENT_NOT_DISPATCHED,
     SHIPMENT_EXPECTED_DATE_WARNING, SHIPMENT_EXPECTED_DATE_PAST];
