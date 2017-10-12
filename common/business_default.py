DEFAULT_INVOICE_DUE_TIME = 24  # default 1 day count by hours


URGENT_JOB_PRIORITY = 1
HIGH_JOB_PRIORITY = 2
MEDIUM_JOB_PRIORITY = 3
LOW_JOB_PRIORITY = 4

URGENT_STRING = "urgent"
HIGH_STRING = "high"
MEDIUM_STRING = "medium"
LOW_STRING = "low"

# map strings to integers
PRIORITY_OPTIONS = {
    URGENT_STRING: URGENT_JOB_PRIORITY,
    HIGH_STRING: HIGH_JOB_PRIORITY,
    MEDIUM_STRING: MEDIUM_JOB_PRIORITY,
    LOW_STRING: LOW_JOB_PRIORITY
}

# map integers to strings
PRIORITY_OPTIONS_REVERSE_MAP = \
    dict(((b, a) for (a, b) in PRIORITY_OPTIONS.items()))


ONLINE_PAYMENT = 1
PAYPAL_PAYMENT = 2
BANK_TRANSFER = 3
CASH = 4
CHEQUE = 5
PHONE_PAYMENT = 6
CREDIT_CARD = 7

PAYMENT_TYPES = {
    ONLINE_PAYMENT: "Online Payment",
    PAYPAL_PAYMENT: "PayPal Payment",
    BANK_TRANSFER: "Bank Transfer",
    CASH: "Cash",
    CHEQUE: "Cheque",
    PHONE_PAYMENT: "Phone Payment",
    CREDIT_CARD: "Credit Card"
}

PAYMENT_TYPES_OPTIONS = \
    dict((b, a) for (a, b) in PAYMENT_TYPES.items())
