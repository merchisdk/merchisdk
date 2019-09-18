import { ComponentTag } from './component_tag';
import { Entity } from '../entity';
import { MerchiFile } from './file';

export class Component extends Entity {
  protected static resourceName: string = "components";
  protected static singularName: string = "component";
  protected static pluralName: string = "components";

  @Component.property()
  public archived?: Date | null;

  @Component.property()
  public id?: number;

  @Component.property()
  public name?: string;

  @Component.property()
  public body?: string;

  @Component.property()
  public description?: string;

  @Component.property()
  public compiled?: string;

  @Component.property("MerchiFile")
  public images?: Array<MerchiFile>;

  @Component.property()
  public featureImage?: MerchiFile | null;

  @Component.property("ComponentTag")
  public tags?: Array<ComponentTag>;
}