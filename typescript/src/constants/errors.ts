export enum ErrorType {
  UNKNOWN_ERROR = 0,
  SERVER_ERROR = 1,
  CLIENT_ERROR = 2,
  EMAIL_ALREADY_EXISTS = 3,
  SUPPLIER_NOT_ADDED_TO_PRODUCT = 4,
  EMAIL_NOT_FOUND = 5,
  INVALID_PHONE_NUMBER = 6,
  INVALID_PASSWORD = 7,
  RESOURCE_NOT_FOUND = 8,
  RESOURCE_GONE = 9,
  REQUEST_TOO_LARGE = 10,
  UNKNOWN_DOMAIN = 11,
  UNSUPPORTED_METHOD = 12,
  MISSING_EVENT_TYPES = 13,
  INVALID_EVENT_TYPES = 14,
  MISSING_URI = 15,
  MISSING_SID = 16,
  MISSING_SECRET_KEY = 17,
  MISSING_SUBSCRIPTION_TOKEN = 18,
  WRONG_SECRET_KEY = 19,
  DUPLICATE_SUBSCRIPTION_TOKEN = 20,
  BAD_SMS_TOKEN = 21,
  DOMAIN_NOT_FOUND = 22,
}

export function getErrorFromCode(code: number): ErrorType {
  if (code in ErrorType) {
    return code;
  }
  return ErrorType.UNKNOWN_ERROR;
}
