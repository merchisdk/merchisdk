import { Company } from './company';
import { Entity } from '../entity';
import { Item } from './item';
import { Job } from './job';
import { Shipment } from './shipment';

export class CountryTax extends Entity {
  protected static resourceName: string = 'country_taxes';
  protected static singularName: string = 'countryTax';
  protected static pluralName: string = 'countryTaxes';

  @CountryTax.property()
  public archived?: Date | null;

  @CountryTax.property()
  public id?: number;

  @CountryTax.property()
  public country?: string | null;

  @CountryTax.property()
  public taxName?: string;

  @CountryTax.property()
  public taxPercent?: number | null;

  @CountryTax.property({ arrayType: 'Shipment' })
  public shipments?: Array<Shipment>;

  @CountryTax.property({ arrayType: 'Company' })
  public companies?: Array<Company>;

  @CountryTax.property({ arrayType: 'Job' })
  public jobs?: Array<Job>;

  @CountryTax.property({ arrayType: 'Item' })
  public items?: Array<Item>;

  public static getNoTax() {
    const result = new this.merchi.CountryTax();
    result.id = 3; // 3 is a reserved id for 'no tax' by the backend
    result.taxName = 'No tax';
    result.taxPercent = 0;
    return result;
  }
}
