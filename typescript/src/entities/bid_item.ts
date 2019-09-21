import { Bid } from './bid';
import { Entity } from '../entity';

export class BidItem extends Entity {
  protected static resourceName: string = "bid_items";
  protected static singularName: string = "bidItem";
  protected static pluralName: string = "bitItems";

  @BidItem.property()
  public archived?: Date | null;

  @BidItem.property()
  public id?: number;

  @BidItem.property()
  public type?: number;

  @BidItem.property()
  public quantity?: number;

  @BidItem.property()
  public description?: string | null;

  @BidItem.property()
  public unitPrice?: number | null;

  @BidItem.property()
  public bid?: Bid;
}
